<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    // protected $table = 'laporan';
    protected $fillable = [
        'nama_inventaris',
        'qty_inventaris',
        'id_kategori',
        'keterangan_inventaris',
        'created_at',
        'updated_at'
    ];
}
