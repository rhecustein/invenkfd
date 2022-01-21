<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    protected $fillable = ['name', 'slug'];
    protected $table = 'kategori';
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
