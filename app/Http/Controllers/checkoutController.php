<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class checkoutController extends Controller
{
    public function checkout()
    {

        return view('user.layouts.checkout');
    }
    public function prosescheckout(Request $request)
    {
        // Generate nobukti
        $nobukti = 'J' . now()->format('YmdHis') . rand(1000, 9999);

        // Validate request
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
        ]);

        $user = Auth::user();
        
            DB::table('tbpelanggan')->insert([
                'code' => $nobukti,
                'name' => $user->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'created_at' => now(),
                'updated_at' => now()
            ]);

            $datakeranjang = DB::table('tbkeranjang')
            ->where('idpelanggan', $user->id)
            ->get();

            $totalHarga = 0;
            foreach ($datakeranjang as $value) {
                
                $totalHarga += $value->harga;
            }

    
            // Insert ke tabel tbjual
            DB::table('tbjual')->insert([
                'nobukti' => $nobukti,
                'tgl' => now(),
                'idpelanggan' => $user->id,
                'keterangan' => 'Pembelian Barang',
                'total' => $totalHarga,
                'foto' => null // Awalnya null, nanti bisa diupdate saat upload bukti bayar
            ]);
    
            // Looping untuk memproses insert ke tabel mutasi dan delete dari keranjang
            foreach ($datakeranjang as $item) {
                // Insert ke tabel mutasi
                DB::table('tbmutasi')->insert([
                    'nobukti' => $nobukti,
                    'idbarang' => $item->idbarang,
                    'qty' => $item->qty,
                    // 'kode' => $item->kode,
                    'mk' => 'K',
                    'harga' => $item->harga,
                    'status' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                DB::table('tbbarang')
                ->where('id', $item->idbarang)
                ->decrement('sawal', $item->qty);
    
                DB::table('tbkeranjang')->where('id', $item->id)->delete();
            }
            Alert::success('Success', 'Product Berhasil Di Checkout');
            return redirect('cart');
    }
}
