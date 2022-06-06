<?php

namespace App\Imports;

use App\Models\Inventaris;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\DB;

// class LaporanImport implesments ToModel, WithHeadingRow
class LaporanImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    // public function model(array $row)
    // {

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            DB::beginTransaction();
            Inventaris::create([
                'nama_inventaris' => $row[1],
                'qty_inventaris' => $row[2],
                'id_kategori' => $row[3],
                'id_lokasi' => $row[4],
                'keterangan_inventaris' => $row[5],
            ]);
            DB::commit();
        }
    }
}