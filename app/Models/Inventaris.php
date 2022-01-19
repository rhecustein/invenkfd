<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    use HasFactory;

    protected $table = 'inventaris';
    protected $fillable = [
        'nama_inventaris',
        'qty_inventaris',
        // 'id_kategori',
        'keterangan_inventaris'
    ];
}
