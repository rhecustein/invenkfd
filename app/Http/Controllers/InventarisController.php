<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = Inventaris::paginate(100000);
        return view('inven.inventoris',compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kategori = Kategori::all();
        return view('inven.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $inventaris = Inventaris::create([
            'nama_inventaris' => $request->nama_inventaris,
            'qty_inventaris' => $request->qty_inventaris,
            'id_kategori' => $request->id_kategori,
            'slug' => Str::slug($request->nama_inventaris),
            'keterangan_inventaris' => $request->keterangan_inventaris,
        ]);

        return redirect('inven/inventoris')->with('message', 'Inventoris Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function show(Inventaris $inventaris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventaris = Inventaris::findorfail($id);
        return view('inven.edit', compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $inventaris = Inventaris::findorfail($id);
        $inventaris->nama_inventaris = $request->input('nama_inventaris');
        $inventaris->qty_inventaris = $request->input('qty_inventaris');
        // $inventaris->id_kategori = $request->input('id_kategori');
        $inventaris->keterangan_inventaris = $request->input('keterangan_inventaris');
        $inventaris->update();

        return redirect('inven/inventoris')->with('message', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventaris  $inventaris
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inventaris = Inventaris::findorfail($id);
        $inventaris->delete();
        return redirect('inven/inventoris')->with('message', 'Data Berhasil Dihapus');
    }
}
