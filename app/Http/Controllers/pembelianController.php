<?php

namespace App\Http\Controllers;

use function Laravel\Prompts\select;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class pembelianController extends Controller
{

    public function index() {
        $dataBeli = DB::table('tbbeli')
        // ->leftJoin('tbmutasi', 'tbmutasi.nobukti', '=', 'tbbeli.nobukti')
        ->leftJoin('pemasok', 'pemasok.id', '=', 'tbbeli.idpemasok')
        ->leftJoin('tbbarang', 'tbbarang.id', '=', 'tbbeli.idbarang')
        ->select('tbbeli.nobukti', 'tbbeli.tgl', 'tbbeli.ket',
        // 'tbmutasi.harga as harga',

        'pemasok.nama as namapemasok', 'tbbarang.nama as namabarang', 'tbbarang.foto as foto')

        ->groupBy('tbbeli.nobukti', 'tbbeli.tgl', 'tbbeli.ket',
        // 'tbmutasi.harga',
        'pemasok.nama', 'tbbarang.foto', 'tbbarang.nama')
        ->get();

        return view('pembelian.list-pembelian')
        ->with('dataBeli', $dataBeli)
        ->with('title', 'List Pembelian');

    }

    public function create(Request $request) {
        // DB::table('');
        $user = Auth::user();
        $nobukti = $request->session()->get('nobukti');
        // $nobukti = 'B'. $user->id . now()->format('YmdHis');

        // if (!session()->has('nobukti')) {
        //     $nobukti = 'B'. $user->id . now()->format('YmdHis');
        //     session(['nobukti' => $nobukti]);
        // } else {
        //     $nobukti = session('nobukti');
        // }

        if (!$nobukti) {
            $nobukti = 'B'. $user->id . now()->format('YmdHis');
            $request->session()->put('nobukti', $nobukti);
        }

        $dataBeli = DB::table('tbbeli')
        // ->leftJoin('tbmutasi', 'tbmutasi.nobukti', '=', 'tbbeli.nobukti')
        ->leftJoin('pemasok', 'pemasok.id', '=', 'tbbeli.idpemasok')
        ->leftJoin('tbbarang', 'tbbarang.id', '=', 'tbbeli.idbarang')
        ->select('tbbeli.nobukti', 'tbbeli.tgl', 'tbbeli.ket', 'tbbeli.created_at',
        // 'tbmutasi.harga as harga',

        'pemasok.nama as namapemasok', 'tbbarang.nama as namabarang', 'tbbarang.foto as foto')

        ->groupBy('tbbeli.nobukti', 'tbbeli.tgl',  'tbbeli.created_at', 'tbbeli.ket',
        // 'tbmutasi.harga',
        'pemasok.nama', 'tbbarang.foto', 'tbbarang.nama')
        ->get();

        $dataBarang = DB::table('tbbarang')
            ->get();

            $dataPemasok = DB::table('pemasok')
            ->get();

// dd($dataBarang);
        return view('pembelian.form-pembelian')
        ->with('nobukti', $nobukti)
        ->with('dataBeli', $dataBeli)
        ->with('dataBarang', $dataBarang)
        ->with('dataPemasok', $dataPemasok)
        ->with('title', 'Form Pembelian')
        ;

    }

    public function store(Request $request)
    {
        // $nobukti = session('nobukti');
        // dd($request->all());
        $request->validate([
            'nobukti' => 'required',
            'tgl' => 'required',
            'idpemasok' => 'required',
            'ket' => 'nullable',
            'idbarang' => 'required',
            'qty' => 'required',
            'harga' => 'required',
        ]);

        $nobukti = $request->input('nobukti');
        // $subTotal = $request->quantity * $request->harga;

        DB::table('tbbeli')->insert([
            'nobukti' => $nobukti,
            'tgl' => $request->tgl,
            'idpemasok' => $request->idpemasok,
            'ket' => $request->ket,
            'idbarang' => $request->idbarang,
            // 'quantity' => $request->quantity,
            // 'harga' => $request->harga,
            // 'sub_total' => $subTotal,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tbmutasi')->insert([
            'nobukti' => $request->nobukti,
            'idbarang' => $request->idbarang,
            'qty' => $request->qty,
            'mk' => 'M',
            'harga' => $request->harga,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        Alert::success('Success', 'Order Delivered Successfully');
        return redirect('admin/pembelian/create')->with(['nobukti' => $nobukti]);
    }

    public function resetNobukti(Request $request)
    {

        $request->session()->forget('nobukti');

        // $dataJual = $this->dataBeli();

        return redirect('admin/pembelian/create');
    }
}
