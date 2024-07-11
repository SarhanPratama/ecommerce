<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ordercontroller extends Controller
{

    public function getDataJual() {
        $dataJual = DB::table('tbjual')
        ->leftJoin('tbmutasi', 'tbmutasi.nobukti', '=', 'tbjual.nobukti')
        ->leftJoin('tbpelanggan', 'tbpelanggan.code', '=', 'tbjual.nobukti')
        ->select('tbjual.nobukti', 'tbjual.tgl', 'tbjual.keterangan', 'tbjual.total', 'tbjual.foto', 'tbpelanggan.name as name', 'tbmutasi.status as status')
        ->groupBy('tbjual.nobukti', 'tbjual.tgl', 'tbjual.keterangan', 'tbjual.total', 'tbjual.foto', 'tbpelanggan.name', 'tbmutasi.status')
        ->get();

        // DD($dataJual);
       return $dataJual;
    }

    public function updateOrderStatus($nobukti, $action)
    {
        $order = DB::table('tbjual')->where('nobukti', $nobukti)->first();

        if ($order) {
            if ($action == 'process') {
                DB::table('tbmutasi')->where('nobukti', $nobukti)->update(['status' => 'process']);
                Alert::success('Success', 'Order Verified Successfully');
            } elseif ($action == 'deliver') {
                DB::table('tbmutasi')->where('nobukti', $nobukti)->update(['status' => 'delivery']);

                Alert::success('Success', 'Order Delivered Successfully');
            } elseif ($action == 'delivered') {
                DB::table('tbmutasi')->where('nobukti', $nobukti)->update(['status' => 'delivered']);

                Alert::success('Success', 'Order Delivered Successfully');
            }

            else {
                Alert::error('Error', 'Invalid Action');
            }
        } else {
            Alert::error('Error', 'Order Not Found');
        }

        return redirect()->back();
    }

    public function index() {

        $dataJual = $this->getDataJual();

        return view('admin.order.list')
        ->with('title', 'Orders-List')
        ->with('dataJual', $dataJual)
        ;
    }
}
