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
        return $this->hasMany(Inventaris::class, 'id', 'id_kategori');
    }

}
