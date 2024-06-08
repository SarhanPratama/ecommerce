<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class cartComposer
{
    public function compose(View $view)
    {
        $idpelanggan = Auth::user()->id;

        $cartItems = DB::table('tbkeranjang')
            ->leftJoin('tbbarang', 'tbbarang.id', '=', 'tbkeranjang.idbarang')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->select('tbkeranjang.*', 'tbbarang.*', 'tbkategori.nama as namaKategori', 'tbsatuan.nama as namaSatuan')
            ->where('tbkeranjang.idpelanggan', $idpelanggan)
            ->get();

            $totalHarga = 0;
            foreach ($cartItems as $value) {
                
                $totalHarga += $value->harga;
            }

        $view->with('cartItems', $cartItems)->with('totalHarga', $totalHarga);
    }
}
