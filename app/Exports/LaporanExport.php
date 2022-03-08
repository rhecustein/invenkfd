<?php

namespace App\Exports;

use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class LaporanExport implements FromQuery, WithHeadings, WithMapping
{
    public function query()
    {
        return Inventaris::query();
    }

    public function headings(): array
    {
        return [
            'Nama Barang',
            'Kategori',
            'Jumlah',
            'keterangan',
            'Dibuat Tanggal'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function map($inventaris): array
    {
        return [
            $inventaris->nama_inventaris,
            $inventaris->kategori->name,
            $inventaris->qty_inventaris,
            $inventaris->keterangan_inventaris,
            $inventaris->created_at,
        ];
    }
}
