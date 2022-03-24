<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::paginate(10000);
        return view('kategori.kategori', compact('kategori'));
    }


    public function create()
    {
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

        return redirect('kategori')->with('success', 'Berhasil Membuat Kategori');
    }


    public function show($id)
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

        $this->validate($request, [
            'name' => 'required'
        ]);

        $kategori_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Kategori::whereId($id)->update($kategori_data);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diedit');
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

        return redirect('inven/kategori')->with('success', 'Kategori berhasil dihapus');
    }

    public function trash_list()
    {
        $kategori = Kategori::onlyTrashed()->paginate(1000);
        return view('trash.kategori_trash', compact('kategori'));
    }

    public function restore($id = null)
    {
        if($id != null) {
            $kategori = Kategori::onlyTrashed()
                ->where('id', $id)
                ->restore();
        } else {
            $kategori = Kategori::onlyTrashed()->restore();
        }

        return redirect('trash/kategori')->with('success', 'Kategori Berhasil Direstore');
    }

    public function delete_permanent($id = null)
    {
        if($id != null) {
            $kategori = Kategori::onlyTrashed()
                ->where('id', $id)
                ->forceDelete();
        } else {
            $kategori = Kategori::onlyTrashed()->forceDelete();
        }

        return redirect('trash/kategori')->with('success', 'Kategori Berhasil Dihapus Permanent');
    }
}
