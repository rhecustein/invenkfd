<?php

namespace App\Imports;

use App\Models\Inventaris;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

// class LaporanImport implements ToModel, WithHeadingRow
class LaporanImport implements WithHeadingRow
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
            Inventaris::create([
                'nama_inventaris' => $row[3],
                'qty_inventaris' => $row[1],
                'id_kategori' => $row[2],
                'id_lokasi' => $row[4],
                'keterangan_inventaris' => $row[5],
            ]);
            DB::commit();
        }
    }

//         dd($row);
//         return new Inventaris([
//             'nama_inventaris' => $row[3],
//             'qty_inventaris' => $row['qty'],
//             'id_kategori' => $row[2],
//             'id_lokasi' => $row[4],
//             'keterangan_inventaris' => $row[5],

//             'nama_inventaris' => $row['nama_inventaris'],
//             'qty_inventaris' => $row[2],
//             'id_kategori' => $row['id_kategori'],
//             'id_lokasi' => $row['id_lokasi'],
//             'keterangan_inventaris' => $row['keterangan_inventaris'],
//         ]);
//     }
// }
}