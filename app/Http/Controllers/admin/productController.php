<?php

namespace App\Http\Controllers\admin;

use App\Models\satuan;
use App\Models\product;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Termwind\Components\Dd;

class productController extends Controller
{
    public function index()
    {
        $product = product::with('satuan', 'kategori')->get();
        return view('products.admin-list', compact('product'));
    }

    public function create()
    {
        $kategori = kategori::all();
        $satuan = satuan::all();
        return view('products.add', compact('kategori', 'satuan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'idsatuan' => 'required',
            'idkategori' => 'required',
            'sawal' => 'required',
            'hb' => 'required',
            'hj' => 'required',
            'desc' => 'nullable',
            'pajang' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        // if ($request->hasFile('foto')) {
        //     foreach ($request->file('foto') as $key => $image) {
        //         $imageName = time() . '_' . $key . '.' . $image->getClientOriginalExtension();
        //         $image->storeAs('product_images/' . $request->kode, $imageName, 'public');
        //     }
        // }
        // $image = null;
        if ($request->hasFile('foto')) {
            $image = $request->file('foto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image = $request->file('foto')->storeAs('product_images', $imageName, 'public');
        }

        product::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idsatuan' => $request->idsatuan,
            'idkategori' => $request->idkategori,
            'sawal' => $request->sawal,
            'hb' => $request->hb,
            'hj' => $request->hj,
            'desc' => $request->desc,
            'pajang' => (bool) $request->pajang,
            'foto' => $image,
        ]);

        return redirect()->route('product.index');
    }

    public function show($id)
    {
        $product = product::findOrFail($id);
        $satuan = satuan::all();
        $kategori = kategori::all();

        return view('products.edit', compact('product', 'satuan', 'kategori'));
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
            'desc' => 'nullable',
            'pajang' => 'nullable',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        // Mendapatkan data produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Mengatur nilai foto awal
        $image = $product->foto;

        // Jika ada foto yang diunggah, simpan foto yang baru
        if ($request->hasFile('foto')) {
            $imageFile = $request->file('foto');
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
            $image = $request->file('foto')->storeAs('product_images', $imageName, 'public');

            // Hapus foto yang lama jika ada
            if ($product->foto) {
                Storage::disk('public')->delete($product->foto);
            }
        }

        // Update data produk
        $product->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idsatuan' => $request->idsatuan,
            'idkategori' => $request->idkategori,
            'sawal' => $request->sawal,
            'hb' => $request->hb,
            'hj' => $request->hj,
            'desc' => $request->desc,
            'pajang' => (bool) $request->pajang,
            'foto' => $image,
        ]);


        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        if ($product->foto) {
            Storage::disk('public')->delete('product_images/' . $product->foto);
        }

        $product->delete();

        // Redirect ke halaman produk atau tindakan lain yang sesuai
        return redirect()->route('product.index');
    }
}
