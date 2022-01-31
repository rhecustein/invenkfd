<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Models\Inventaris;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        $inventaris = Inventaris::get();
        return view('laporan.laporan', compact('inventaris'));
    }

    public function exportExcel()
    {
        return Excel::download(new LaporanExport, 'laporan.xlsx');
    }
}
