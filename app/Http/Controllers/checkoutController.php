<?php

namespace App\Http\Controllers;

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
        $user = Auth::user();

        $nobukti = 'J'. $user->id . now()->format('YmdHis');


        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


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

            DB::table('tbjual')->insert([
                'nobukti' => $nobukti,
                'tgl' => now(),
                'idpelanggan' => $user->id,
                'keterangan' => 'Pembelian Barang',
                'total' => $totalHarga,
                'foto' => $request->file('foto')->store('public/bukti_pembayaran')
            ]);

            foreach ($datakeranjang as $item) {
                DB::table('tbmutasi')->insert([
                    'nobukti' => $nobukti,
                    'idbarang' => $item->idbarang,
                    'qty' => $item->qty,
                    'mk' => 'K',
                    'harga' => $item->harga,
                    'status' => 'pending',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                DB::table('tbkeranjang')->where('id', $item->id)->delete();
            }
            Alert::success('Success', 'Product Berhasil Di Checkout');
            return redirect('/checkout/detail');
    }
}
