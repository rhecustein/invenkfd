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
        'keterangan_inventaris'
    ];

    public function kategori()
    
    {
    return $this->belongsTo(kategori::class, 'id_kategori', 'id');
    }
}
