<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index()
    {
        $barangController = new barangController();

        $barang = $barangController->getBarang();

        // $barang = DB::table('tbbarang')
        //     ->leftjoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
        //     ->select('tbbarang.*', 'tbkategori.nama as kategori')
        //     ->get();
        // dd($this->barang);
        // $barang = $this->getBarang();

        $kategori = DB::table('tbkategori')->get();

        return view('user/home/home-one')
            ->with('barang', $barang)
            ->with('kategori', $kategori);
    }

    public function detailProduct(int $id)
    {
        $saldoAkhir = DB::table('vsaldoakhir2')
            ->leftJoin('tbbarang', 'tbbarang.id', '=', 'vsaldoakhir2.id')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('vsaldoakhir2.*', 'tbbarang.*', 'tbkategori.nama as kategori')
            ->where('vsaldoakhir2.id', $id)
            ->first();
        // dd($saldoAkhir);

        $relatedProducts = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori')
            ->where('tbbarang.idkategori', $saldoAkhir->idkategori)
            ->where('tbbarang.id', '!=', $id)
            ->take(5)
            ->get();


        return view('user.layouts.detail')
            ->with('saldoAkhir', $saldoAkhir)
            ->with('relatedProducts', $relatedProducts);
    }


    public function addToCart(Request $request, $id)
    {

        $quantity = $request->input('quantity');

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
                    'qty' => $existingCart->qty + $quantity,
                    'harga' => ($existingCart->qty + $quantity) * $barang->hj,
                ]);
        } else {
            // Insert item baru ke keranjang
            DB::table('tbkeranjang')->insert([
                'idpelanggan' => $idpelanggan,
                'idbarang' => $id,
                'qty' => $quantity,
                'harga' => $barang->hj * $quantity,
                'tgl' => now(),
            ]);
        }
        Alert::success('Success', 'Product Berhasil Ditambah ke keranjang');
        return redirect()->back();
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

    public function profile()
    {
        return view('account.profile');
    }

    public function orderList()
    {
        $user = auth()->user()->id;
        $dataJual = DB::table('tbjual')
        // ->leftJoin('tbpelanggan', 'tbpelanggan.code', '=', 'tbjual.nobukti')
        // ->leftJoin('tbmutasi', 'tbmutasi.nobukti', '=', 'tbjual.nobukti')
        ->select('tbjual.*',
        // 'tbpelanggan.*',
                // 'tbmutasi.qty as qty',
                // 'tbmutasi.status as status'
                )
        ->where('tbjual.idpelanggan', $user)
        ->get();

        // DD($dataJual);

        $jmlhProduk = DB::table('tbmutasi')
        ->select('nobukti', DB::raw('count(*) as total'))
        ->groupBy('nobukti')
        ->first();

        // DD($jmlhProduk);

        return view('account.order-list')
        ->with('dataJual', $dataJual)
        ->with('jmlhProduk', $jmlhProduk)

        ;
    }

    public function cart()
    {
        return view('user.layouts.cart');
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
            })->get();

        $kategori = DB::table('tbkategori')
            ->leftJoin('tbbarang', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbkategori.id', 'tbkategori.nama', DB::raw('COUNT(tbbarang.id) as count'))
            ->groupBy('tbkategori.id', 'tbkategori.nama')
            ->get();

        return view('user/layouts/kategori', compact('products', 'kategori'));
    }

    public function invoice()
    {

        return view('user.layouts.invoice-detail');
    }


    public function orderDetail()
    {
        $user = Auth::user();

        $orderDetail = DB::table('tbjual')
            ->leftJoin('tbmutasi', 'tbmutasi.nobukti', '=', 'tbjual.nobukti')
            ->select('tbjual.*', 'tbmutasi.status as status')
            ->where('tbjual.idpelanggan', $user->id)
            ->first();
            // DD($orderDetail);
        $orderItems = DB::table('tbmutasi')
            ->leftJoin('tbbarang', 'tbmutasi.idbarang', '=', 'tbbarang.id')
            ->where('nobukti', $orderDetail->nobukti)
            ->select('tbmutasi.*', 'tbbarang.*')
            ->get();

        return view('user.layouts.order-detail')
            ->with('orderDetail', $orderDetail)
            ->with('orderItems', $orderItems);
    }
}
