<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use function Laravel\Prompts\select;
use RealRashid\SweetAlert\Facades\Alert;

class userController extends Controller
{
    public function index()
    {
        $barang = DB::table('tbbarang')
            ->leftjoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbkategori.nama as kategori')
            ->get();

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
        return view('user.layouts.cart');
    }

    public function addToCart($id)
    {
        $barang = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori')
            ->where('tbbarang.id', $id)
            ->first();

        // $quantity = $request->input('quantity', 1);

        $cart = session()->get('cart', []);

        // Periksa apakah barang sudah ada di keranjang
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['totalHarga'] = $cart[$id]['quantity'] * $cart[$id]['hj'];
        } else {
            $foto = explode(',', $barang->foto)[0];
            $cart[$id] = [
                "nama" => $barang->nama,
                "quantity" => 1,
                "kategori" => $barang->kategori,
                "satuan" => $barang->satuan,
                "stok" => $barang->sawal,
                "hj" => $barang->hj,
                "totalHarga" => $barang->hj,
                "foto" => $foto,
            ];
        }

        session()->put('cart', $cart);
        Alert::success('Success', 'Product Berhasil Ditambah ke keranjang');
        return redirect()->back();
    }

    public function deleteCart(Request $request)
    {

        if ($request->id) {

            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }


            // Alert::('Success', 'Product Berhasil Dihapus ke keranjang');
            // session()->flash('success', 'Book successfully deleted.');
            return redirect()->back();
        }
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

        return view('user/layouts/kategori',compact('products', 'kategori'));
    }
}
