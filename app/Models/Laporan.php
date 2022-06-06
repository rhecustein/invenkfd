<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporans';
    protected $fillable = [
        'nama_inventaris',
        'qty_inventaris',
        'id_lokasi',
        'id_kategori',
        'keterangan_inventaris',
        'created_at',
        'updated_at'
    ];

    // public function lokasi_laporan()
    // {
    //     return $this->belongsTo(Laporan::class, 'id_lokasi', 'id');
    // }
}
