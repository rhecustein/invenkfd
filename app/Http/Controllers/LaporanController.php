<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Models\Inventaris;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $inventaris = Inventaris::get();
        $kategori = Kategori::get();
        return view('laporan.laporan', compact('inventaris','kategori'));
    }

    public function laporanFilter(Request $request)
    {
        $columns = [
            'nama_inventaris',
            'id_kategori',
            'qty_inventaris',
            'keterangan_inventaris',
            'created_at'
        ];
        $orderBy = $columns[request()->input("order.0.column")];
        $data = Inventaris::select('*')->with('kategori');

        if(request()->input("search.value")){
            $data = $data->where(function($query){
                $query->whereRaw('LOWER(nama_inventaris) like ?',['%'.strtolower(request()->input("search.value").'%')])
                ->orWhereRaw('LOWER(keterangan_inventaris) like ?',['%'.strtolower(request()->input("search.value").'%')])
                ;
            });
        }

        if(request()->input('kateg')){
            $data = $data->whereRaw('LOWER(id_kategori) = ?',[request()->input('kateg')]);
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

    public function exportExcel()
    {
        return Excel::download(new LaporanExport, 'laporan.xlsx');
    }
}
