<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class barangController extends Controller
{

    public function getBarang() {
        $barang = DB::table('tbbarang')
        ->leftjoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
        ->select('tbbarang.*', 'tbkategori.nama as kategori')
        ->get();

        return $barang;
    }


    public function index(Request $request)
    {
        $search = $request->query('search');
        $kategori = $request->query('kategori');
        $sevenDaysAgo = Carbon::now()->subDays(7)->toDateString();

        $query = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori');
        if ($search) {
            $query->where(function ($query) use ($search) {
                $query->where('tbbarang.kode', 'LIKE', '%' . $search . '%')
                    ->orWhere('tbbarang.nama', 'LIKE', '%' . $search . '%')
                    ->orWhere('tbkategori.nama', 'LIKE', '%' . $search . '%');
            });
        }

        if ($kategori) {
            $query->where('tbkategori.id', $kategori);
        }

        $barang = $query->simplePaginate(3);
        // $totalProducts = $query->count();
        $page = $barang->currentPage();

        $newProduct = DB::table('tbbarang')
        ->where('created_at', '>=', $sevenDaysAgo)
        ->count();

        $kategori = DB::table('tbkategori')->get();

        $totalProducts = DB::table('tbbarang')->count();

        return view('admin.barang.admin-list')
            ->with('barang', $barang)
            ->with('page', $page)
            ->with('newProduct', $newProduct)
            ->with('kategori', $kategori)
            ->with('totalProducts', $totalProducts)
            ->with('title', 'Product - List');
    }



    public function create()
    {
        $satuan = DB::table('tbsatuan')->get();
        $kategori = DB::table('tbkategori')->get();

        return view('admin.barang.add', compact('kategori', 'satuan'))
            ->with('title', 'Tambah Barang');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'kode' => 'required|unique:tbbarang',
                'nama' => 'required',
                'idsatuan' => 'required',
                'idkategori' => 'required',
                'sawal' => 'required',
                'hb' => 'required',
                'hj' => 'required',
                'desc' => 'required',
                'pajang' => 'required',
                'foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]
        );

        $gambarPaths = [];
        if ($request->hasFile('foto')) {
            $folderName = 'barang_' . $request->nama;
            foreach ($request->file('foto') as $foto) {
                $imageName = time() . '_' . $foto->getClientOriginalName();
                $gambarPath = $foto->storeAs('product_images/' . $folderName, $imageName, 'public');

                $gambarPaths[] = $gambarPath;
            }
        }

        DB::table('tbbarang')->insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idsatuan' => $request->idsatuan,
            'idkategori' => $request->idkategori,
            'sawal' => $request->sawal,
            'hb' => $request->hb,
            'hj' => $request->hj,
            'desc' => $request->desc,
            'pajang' => $request->pajang,
            'foto' => implode(',', $gambarPaths),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Alert::success('Success', 'Data Berhasil Ditambah');
        return redirect()->route('product.index');
    }

    public function show(int $id)
    {
        $barang = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori')
            ->where('tbbarang.id', $id)
            ->first();

        // dd($barang);
        return view('admin.barang.admin-detail')
            ->with('barang', $barang)
            ->with('title', 'Product - details');
    }

    public function edit(string $id)
    {

        $barang = DB::table('tbbarang')
            ->leftJoin('tbsatuan', 'tbsatuan.id', '=', 'tbbarang.idsatuan')
            ->leftJoin('tbkategori', 'tbkategori.id', '=', 'tbbarang.idkategori')
            ->select('tbbarang.*', 'tbsatuan.nama as satuan', 'tbkategori.nama as kategori')
            ->where('tbbarang.id', $id)
            ->first();

        $satuan = DB::table('tbsatuan')->get();
        $kategori = DB::table('tbkategori')->get();
        // dd($barang);
        return view('admin.barang.edit')
            ->with('barang', $barang)
            ->with('title', 'Product - update')
            ->with('satuan', $satuan)
            ->with('kategori', $kategori);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'idsatuan' => 'required',
            'idkategori' => 'required',
            'sawal' => 'required',
            'hb' => 'required',
            'hj' => 'required',
            'desc' => 'required',
            'status' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $barang = DB::table('tbbarang')->where('id', $id)->first();

        if (!$barang) {
            return redirect()->route('product.index')->with('error', 'Data barang tidak ditemukan');
        }
        $gambarPaths = [];
        if ($request->hasFile('foto')) {
            $gambarLamaPaths = explode(',', $barang->foto);
            foreach ($gambarLamaPaths as $gambarLamaPath) {
                Storage::delete('public/' . $gambarLamaPath);
            }
            $folderName = 'barang_' . $request->nama;

            foreach ($request->file('foto') as $foto) {
                $imageName = time() . '_' . $foto->getClientOriginalName();
                $gambarPath = $foto->storeAs('product_images/' . $folderName, $imageName, 'public');
                $gambarPaths[] = $gambarPath;
            }
        } else {
            $gambarPaths = explode(',', $barang->foto);
        }

        DB::table('tbbarang')->where('id', $id)->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idsatuan' => $request->idsatuan,
            'idkategori' => $request->idkategori,
            'sawal' => $request->sawal,
            'hb' => $request->hb,
            'hj' => $request->hj,
            'desc' => $request->desc,
            'status' => $request->status,
            'foto' => implode(',', $gambarPaths),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Alert::success('Success', 'Data Berhasil Diperbarui');
        return redirect()->route('product.index');
    }
}
