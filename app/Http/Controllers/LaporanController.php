<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Models\Inventaris;
use App\Models\Kategori;
use App\Models\Laporan;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class LaporanController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::get();
        $kategori = Kategori::get();
        return view('laporan.laporan', compact('inventaris','kategori'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new LaporanExport, 'laporan.xlsx');
    }
}
