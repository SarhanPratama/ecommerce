<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class kategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'kategori';
        $kategori = DB::table('tbkategori')->get();

        // dd($kategori);

        return view('admin.category.list')
            ->with('kategori', $kategori)
            ->with('title', $title);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Kategori';

        return view('admin.category.add')
            ->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(request $r)
    {
        $x = [
            'kode' => $r->kode,
            'nama' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Cek apakah file foto diunggah
        if ($r->hasFile('foto')) {
            // Validasi file foto
            $r->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Ambil file foto yang diunggah
            $foto = $r->file('foto');

            // Tentukan nama unik untuk file foto
            $namaFoto = time().'.'.$foto->getClientOriginalExtension();

            // Pindahkan file foto ke direktori penyimpanan
            $foto->storeAs('public/kategori', $namaFoto);
            $x['foto'] = $namaFoto;
        }

        DB::table('tbkategori')->insert([
            'nama' => $r->nama,
            'foto' => $x['foto'], // Simpan nama gambar ke dalam kolom gambar
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Alert::success('Success', 'Data Berhasil Ditambah');
        return redirect()->route('category.index');

    }

    public function edit(string $id)
    {
        $kategori = DB::table('tbkategori')
        ->where('id', $id)
        ->first();

        return view('admin.category.edit')
        ->with('title', 'Category')
            ->with('kategori', $kategori);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, $id)
    {
        $x = [
            'nama' => 'required|string|max:255',
        ];

        // Cek apakah ada file foto yang diunggah
        if ($r->hasFile('foto')) {
            // Validasi file foto
            $r->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Ambil file foto yang diunggah
            $foto = $r->file('foto');

            // Tentukan nama unik untuk file foto
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();

            // Pindahkan file foto ke direktori penyimpanan
            $foto->storeAs('public/kategori', $namaFoto);
            Alert::success('Success', 'Data Berhasil Diupdate');
            // Simpan nama file foto ke dalam array $x
            $x['foto'] = $namaFoto;
        }

        // Update data kategori berdasarkan ID
        DB::table('tbkategori')
            ->where('id', $id)
            ->update([
                'nama' => $r->nama,
                'foto' => isset($x['foto']) ? $x['foto'] : null, // Simpan nama gambar ke dalam kolom gambar jika ada
                'updated_at' => now(),
            ]);

        // Tampilkan pesan sukses dan redirect ke halaman index
        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect()->route('category.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
