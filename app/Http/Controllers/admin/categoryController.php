<?php

namespace App\Http\Controllers\admin;

use App\Models\product;
use App\Models\kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class categoryController extends Controller
{
    public function index()
    {
        $kategori = kategori::all();

        return view('category.list')->with('kategori', $kategori);
    }

    public function create()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nama' => 'required',
        ]);

        kategori::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('category.index');
    }

    public function show($id)
    {
        $category = kategori::findOrFail($id);

        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $category = kategori::findOrFail($id);

        $category->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        $category = kategori::findorfail($id);

        $category->delete();

        return redirect()->route('category.index');
    }
}
