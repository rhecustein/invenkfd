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
<<<<<<< HEAD
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        // 'id_kategori',
=======
        'id_kategori',
>>>>>>> Stashed changes
=======
        'id_kategori',
>>>>>>> Stashed changes
=======
        'id_kategori',
>>>>>>> origin/main
        'keterangan_inventaris'
    ];

    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
}
