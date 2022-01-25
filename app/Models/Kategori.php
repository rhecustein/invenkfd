<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{

    use SoftDeletes;

    protected $fillable = ['name', 'slug'];
    protected $table = 'kategori';


    public function kategori()
    {
        return $this->belongsTo('App\Models\Inventaris', 'id', 'id_kategori');
    }
    
}
