<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lokasi = Lokasi::paginate(100000);
        return view('lokasi.lokasi', compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_lokasi' => 'required|min:3',
            'nama_lokasi' => 'required|min:3'
        ]);

        $lokasi = Lokasi::create([
            'kode_lokasi' => $request->kode_lokasi,
            'nama_lokasi' => $request->nama_lokasi
        ]);

        return redirect('lokasi')->with('lokasi', 'Berhasil Membuat Lokasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lokasi = Lokasi::findorfail($id);
        return view('lokasi.edit', compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'kode_lokasi' => 'required',
            'nama_lokasi' => 'required'
        ]);

        $lokasi_data = [
            'kode_lokasi' => $request->kode_lokasi,
            'nama_lokasi' => $request->nama_lokasi
        ];

        Lokasi::whereId($id)->update($lokasi_data);

        return redirect()->route('lokasi.index')->with('lokasi', 'Lokasi berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lokasi  $lokasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lokasi = Lokasi::findorfail($id);
        $lokasi->delete();

        return redirect('lokasi')->with('lokasi', 'Lokasi berhasil dihapus');
    }

    public function trash_list()
    {
        $lokasi = lokasi::onlyTrashed()->paginate(1000);
        return view('trash.lokasi_trash', compact('lokasi'));
    }

    public function restore($id = null)
    {
        if($id != null) {
            $lokasi = Lokasi::onlyTrashed()
                ->where('id', $id)
                ->restore();
        } else {
            $lokasi = Lokasi::onlyTrashed()->restore();
        }

        return redirect('trash/lokasi')->with('lokasi-trash', 'Lokasi Berhasil Direstore');
    }

    public function delete_permanent($id = null)
    {
        if($id != null) {
            $lokasi = Lokasi::onlyTrashed()
                ->where('id', $id)
                ->forceDelete();
        } else {
            $lokasi = Lokasi::onlyTrashed()->forceDelete();
        }

        return redirect('trash/lokasi')->with('lokasi-trash', 'Lokasi Berhasil Dihapus Permanent');
    }
}
