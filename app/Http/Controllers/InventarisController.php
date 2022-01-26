<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class InventarisController extends Controller
{

    public function index()
    {
        $inventaris = Inventaris::paginate(10);
        $kategoris = Kategori::get();

        return view('inven.inventaris',compact('inventaris','kategoris'));
    }

    public function create()
    {

        $kategori = Kategori::all();
        return view('inven.create', compact('kategori'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'nama_inventaris' => 'required',
            'qty_inventaris' => 'required',
            'id_kategori' => 'required',
            'keterangan_inventaris' => 'required'
        ]);

        $inventaris = Inventaris::create([
            'nama_inventaris' => $request->nama_inventaris,
            'qty_inventaris' => $request->qty_inventaris,
            'id_kategori' => $request->id_kategori,
            'slug' => Str::slug($request->nama_inventaris),
            'keterangan_inventaris' => $request->keterangan_inventaris,
        ]);

        return redirect('inven/inventaris')->with('message', 'Inventaris Berhasil Disimpan');
    }

    public function show(Inventaris $inventaris)
    {
        //
    }

    public function edit($id)
    {

        $kategori = Kategori::all();
        $inventaris = Inventaris::findorfail($id);
        return view('inven.edit', compact('inventaris', 'kategori'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'nama_inventaris' => 'required',
            'qty_inventaris' => 'required',
            'id_kategori' => 'required',
            'keterangan_inventaris' => 'required'
        ]);

        $inventaris = Inventaris::findorfail($id);

        $update_data = [
            'nama_inventaris' => $request->nama_inventaris,
            'qty_inventaris' => $request->qty_inventaris,
            'id_kategori' => $request->id_kategori,
            'keterangan_inventaris' => $request->keterangan_inventaris,
            'slug' => Str::slug($request->name)
        ];

        $inventaris->update($update_data);

        // $inventaris->nama_inventaris = $request->input('nama_inventaris');
        // $inventaris->qty_inventaris = $request->input('qty_inventaris');
        // $inventaris->id_kategori = $request->input('id_kategori');
        // $inventaris->keterangan_inventaris = $request->input('keterangan_inventaris');

        return redirect('inven/inventaris')->with('message', 'Data Berhasil Disimpan');
    }

    public function destroy($id)
    {
        $inventaris = Inventaris::findorfail($id);
        $inventaris->delete();
        return redirect('inven/inventaris')->with('message', 'Data Berhasil Dihapus');
    }

    public function trash_list()
    {
        $inventaris = Inventaris::onlyTrashed()->paginate(1000);
        return view('trash.trash', compact('inventaris'));
    }

    public function restore($id = null)
    {
        if($id != null) {
            $inventaris = Inventaris::onlyTrashed()
                ->where('id', $id)
                ->restore();
        } else {
            $inventaris = Inventaris::onlyTrashed()->restore();
        }

        return redirect('/trash')->with('message', 'Data Berhasil Direstore');
    }

    public function delete_permanent($id = null)
    {
        if($id != null) {
            $inventaris = Inventaris::onlyTrashed()
                ->where('id', $id)
                ->forceDelete();
        } else {
            $inventaris = Inventaris::onlyTrashed()->forceDelete();
        }

        return redirect('/trash')->with('message', 'Data Berhasil Dihapus Permanent');
    }
}
