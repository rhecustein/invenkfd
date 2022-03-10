<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Models\Inventaris;
use App\Models\Kategori;
use App\Models\Laporan;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class LaporanController extends Controller
{
    private $data;

    public function index(Request $request)
    {
        $inventaris = Inventaris::get();
        $kategori = Kategori::get();
        return view('laporan.laporan', compact('inventaris','kategori'));
    }

    public function laporanFilter(Request $request)
    {

        $kateg = $request->kateg;
        $start_date = $request->fromdate;
        $end_date = $request->todate;
        $search_data = $request->input("search.value");
        $order_by = $request->input("order.0.column");

        $columns = [
            'nama_inventaris',
            'id_kategori',
            'qty_inventaris',
            'keterangan_inventaris',
            'created_at'
        ];

        $orderBy = $columns[$order_by];
        $data = Inventaris::select('*')->with('kategori');

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
