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
<<<<<<< Updated upstream
        // 'id_kategori',
=======
        'id_kategori',
>>>>>>> Stashed changes
        'keterangan_inventaris'
    ];
}
