<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventaris extends Model
{
    use SoftDeletes;

    // protected $table = 'inventaris';
    protected $fillable = [
        'nama_inventaris',
        'qty_inventaris',
        'id_kategori',
        'id_lokasi',
        'keterangan_inventaris',
        'created_at',
        'updated_at'
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function lokasi()
    {
        return $this->belongsTo(Lokasi::class, 'id_lokasi','id');
    }
}
