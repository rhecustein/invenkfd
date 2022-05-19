<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lokasi extends Model
{
    use SoftDeletes;

    protected $table = 'lokasi';
    protected $fillable = [
        'kode_lokasi',
        'nama_lokasi',
    ];

    public function lokasi()
    {
        return $this->hasMany(Inventaris::class, 'id','id_lokasi');
    }

    public function lokasi_laporan()
    {
        return $this->hasMany(Laporan::class, 'id', 'id_lokasi');
    }
}
