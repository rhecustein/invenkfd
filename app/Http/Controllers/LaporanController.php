<?php

namespace App\Http\Controllers;

use App\Models\Inventaris;
use App\Models\Kategori;
use App\Models\Lokasi;
use Excel;
use App\Exports\LaporanExport;
use App\Imports\LaporanImport as DataImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $inventaris = Inventaris::get();
        $kategori = Kategori::get();
        $lokasi = Lokasi::get(); 

        return view('laporan.laporan', compact('inventaris','kategori','lokasi'));
    }

    public function laporanExport()
    {
        return Excel::download(new LaporanExport, 'laporan.xlsx');
    }

    public function laporanImport (Request $request)
    {
        $this->validate($request, [
            'dataimport' => 'required|mimes:csv,xls,xlsx'
        ]);

        Excel::import(new DataImport, request()->file('dataimport'));

        return redirect()->back()->with(['success' => 'Data berhasil diimport!']);
    }
    // public function laporanImport(Request $request)
    // {
    //     // $file = $request->file('file');
    //     // $namaFile = $file->getClientOriginalName();
    //     // $file->move('DataLaporan', $namaFile);

    //     Excel::import(new LaporanImport, request()->file('dataimport'));
    //    dd('Import berhasil');
    //     // return redirect('laporan')->with('berhasil','data berhasil di import');
    // }

    // public function laporanImport(Request $request) 
	// {
	// 	// validasi
	// 	$this->validate($request, [
	// 		'file' => 'required|mimes:csv,xls,xlsx'
	// 	]);
 
	// 	// menangkap file excel
	// 	$file = $request->file('file');
 
	// 	// membuat nama file unik
	// 	$nama_file = rand().$file->getClientOriginalName();
 
	// 	// upload ke folder file_siswa di dalam folder public
	// 	$file->move('file_laporan',$nama_file);
 
	// 	// import data
	// 	Excel::import(new laporanImport, public_path('/file_laporan/'.$nama_file));
 
	// 	// notifikasi dengan session
	// 	Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
	// 	// alihkan halaman kembali
	// 	return redirect('/laporan');
	// }

    public function laporanFilter(Request $request)
    {

        $kateg = $request->kateg;
        $lokasi = $request->lokasi;
        $start_date = $request->fromdate;
        $end_date = $request->todate;
        $search_data = $request->input("search.value");
        $order_by = $request->input("order.0.column");

        $columns = [
            'id',
            'nama_inventaris',
            'id_kategori',
            'id_lokasi',
            'qty_inventaris',
            'keterangan_inventaris',
            'created_at'
        ];

        $orderBy = $columns[$order_by];
        $data = Inventaris::select('*')->with('kategori', 'lokasi');

        if($search_data){
            $data = $data->where(function($query){
                $query->whereRaw('LOWER(nama_inventaris) like ?',['%'.strtolower(request()->input("search.value").'%')])
                ->orWhereRaw('LOWER(keterangan_inventaris) like ?',['%'.strtolower(request()->input("search.value").'%')])
                ;
            });
        }

        if($kateg){
            $data = $data->whereRaw('LOWER(id_kategori) = ?',$kateg);
        }

        if($lokasi){
            $data = $data->whereRaw('LOWER(id_lokasi) = ?',$lokasi);
        }

        if($start_date != "" && $end_date != ""){
            $data = $data->whereRaw(
                "(created_at >= ? AND created_at <= ?)",
                [
                    $start_date ." 00:00:00",
                    $end_date ." 23:59:59"
                ]
            );
        }

        $recordsFiltered = $data->get()->count();
        $data = $data
            ->skip(request()->input('start'))
            ->take(request()->input('length'))
            ->orderBy($orderBy,request()->input("order.0.dir"))
            ->get()
            ;
        $recordsTotal = $data->count();

        return response()->json([
            'draw'=>request()->input('draw'),
            'recordsTotal'=>$recordsTotal,
            'recordsFiltered'=>$recordsFiltered,
            'data'=>$data,
            'all_request'=>request()->all()
        ]);
    }
}
