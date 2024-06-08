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
        $barang = DB::table('tbbarang')
            ->leftjoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbkategori.nama as kategori')
            ->where('tbbarang.status', 1)
            ->get();
        // dd($barang);

        $kategori = DB::table('tbkategori')->get();
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

    public function contact()
    {
        return view('user.layouts.contact');
    }

    public function cart()
    {
        return view('user.layouts.cart');
    }

    public function addToCart($id)
    {

        $idpelanggan = auth()->user()->id;
        $barang = DB::table('tbbarang')->where('id', $id)->first();

        $existingCart = DB::table('tbkeranjang')
            ->leftJoin('tbbarang', 'tbbarang.id', '=', 'tbkeranjang.idbarang')
            ->select('tbkeranjang.*', 'tbbarang.hj as hargajual')
            ->where('tbkeranjang.idpelanggan', $idpelanggan)
            ->where('tbkeranjang.idbarang', $id)
            ->first();

        if ($existingCart) {
            // Update qty dan harga total
            DB::table('tbkeranjang')
                ->where('id', $existingCart->id)
                ->update([
                    'qty' => $existingCart->qty + 1,
                    'harga' => ($existingCart->qty + 1) * $barang->hj,
                ]);
        } else {
            // Insert item baru ke keranjang
            DB::table('tbkeranjang')->insert([
                'idpelanggan' => $idpelanggan,
                'idbarang' => $id,
                'qty' => 1,
                'harga' => $barang->hj,
                'tgl' => now(),
            ]);
        }
        Alert::success('Success', 'Product Berhasil Ditambah ke keranjang');
        return redirect()->back();
    }

    public function deleteCart($id)
    {
        $idpelanggan = auth()->user()->id;

        DB::table('tbkeranjang')
            ->where('idpelanggan', $idpelanggan)
            ->where('idbarang', $id)
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
