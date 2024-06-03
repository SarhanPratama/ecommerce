<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $query = DB::table('tbbarang')
            ->leftjoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbkategori.nama as kategori');
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('tbbarang.kode', 'LIKE', '%' . $search . '%')
                    ->orWhere('tbbarang.nama', 'LIKE', '%' . $search . '%')
                    ->orWhere('tbkategori.nama', 'LIKE', '%' . $search . '%');
            });
        }
        $barang = $query->get();

        $kategori = DB::table('tbkategori')->get();
        // dd($barang);

        return view('user/home/home-one')
            ->with('barang', $barang)
            ->with('kategori', $kategori);
    }

    public function detailProduct(int $id)
    {
        $barang = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori')
            ->where('tbbarang.id', $id)
            ->first();
        // dd($barang);

        $relatedProducts = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori')
            ->where('tbbarang.idkategori', $barang->idkategori)
            ->where('tbbarang.id', '!=', $id)
            ->take(5)
            ->get();

        $productName = strtolower(str_replace(' ', '-', $barang->nama));

        return view('user.layouts.detail', ['id' => $id, 'name' => $productName])
            ->with('barang', $barang)
            ->with('relatedProducts', $relatedProducts);
    }

    public function kategori(int $id)
    {
        $kategori = DB::table('tbkategori')
            ->leftJoin('tbbarang', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbkategori.id', 'tbkategori.nama', DB::raw('COUNT(tbbarang.id) as count'))
            ->groupBy('tbkategori.id', 'tbkategori.nama')
            ->get();

        $products = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->where('tbkategori.id', $id)
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori')
            ->get();

        // dd($products);
        return view('user/layouts/kategori')
            ->with('kategori', $kategori)
            ->with('products', $products);
    }

    public function cart()
    {
        $idpelanggan = auth()->user()->id;
        $iduser = auth()->user()->id;
        $cartItems = DB::table('tbkeranjang')
            ->leftJoin('tbbarang', 'tbbarang.id', '=', 'tbkeranjang.idbarang')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->leftJoin('tbpelanggan', 'tbpelanggan.id', '=', 'tbkeranjang.idpelanggan')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->select('tbkeranjang.*', 'tbbarang.*', 'tbpelanggan.nama as namaPelanggan', 'tbkategori.nama as namaKategori', 'tbsatuan.nama as namaSatuan')
            ->where('tbkeranjang.idpelanggan', $idpelanggan)
            ->where('tbkeranjang.iduser', $iduser)
            ->get();

        return view('user.layouts.cart')
            ->with('cartItems', $cartItems);
    }

    public function addToCart($id)
    {
        $idpelanggan = auth()->user()->id;
        $iduser = auth()->user()->id;


        $existingCart = DB::table('tbkeranjang')
            ->where('idpelanggan', $idpelanggan)
            ->where('idbarang', $id)
            ->where('iduser', $iduser)
            ->first();

        if ($existingCart) {
            DB::table('tbkeranjang')
                ->where('id', $existingCart->id)
                ->increment('qty', 1);
        } else {
            DB::table('tbkeranjang')->insert([
                'idpelanggan' => $idpelanggan,
                'idbarang' => $id,
                'iduser' => $iduser,
                'qty' => 1,
                'tgl' => now(),
            ]);
        }
        Alert::success('Success', 'Product Berhasil Ditambah ke keranjang');
        return redirect()->back();
    }

    public function deleteCart($id)
    {
        $idpelanggan = auth()->user()->id;
        $iduser = auth()->user()->id;

        DB::table('tbkeranjang')
            ->where('idpelanggan', $idpelanggan)
            ->where('idbarang', $id)
            ->where('iduser', $iduser)
            ->delete();

        Alert::success('Success', 'Product Berhasil Dihapus dari keranjang');
        return redirect()->back();
    }

    public function filterBarang(Request $request)
    {
        $selectedCategories = $request->input('categories', []);

        $products = DB::table('tbbarang')
            ->leftJoin('tbkategori', 'tbbarang.idkategori', '=', 'tbkategori.id')
            ->leftJoin('tbsatuan', 'tbbarang.idsatuan', '=', 'tbsatuan.id')
            ->select('tbbarang.*', 'tbkategori.nama as kategori', 'tbsatuan.nama as satuan')
            ->when(!empty($selectedCategories), function ($query) use ($selectedCategories) {
                return $query->whereIn('tbbarang.idkategori', $selectedCategories);
            })
            ->get();

        $kategori = DB::table('tbkategori')
            ->leftJoin('tbbarang', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbkategori.id', 'tbkategori.nama', DB::raw('COUNT(tbbarang.id) as count'))
            ->groupBy('tbkategori.id', 'tbkategori.nama')
            ->get();

        return view('user/layouts/kategori', compact('products', 'kategori'));
    }
}
