<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class KategoriController extends Controller
{


    public function index()
    {
        $kategori = Kategori::paginate(10000);
        return view('kategori.kategori', compact('kategori'));
    }


    public function create()
    { 
        $kategori = Kategori::all();
        return view('kategori.create');
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3'
        ]);

        $kategori = Kategori::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect('kategori/kategori')->with('message', 'Berhasil Membuat Kategori');
    }


    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::findorfail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {

        $kategori = Kategori::findorfail($id);
        $kategori->name = $request->input('name');
        $kategori->update();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::findorfail($id);
        $kategori->delete();
        
        return redirect('kategori/kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
