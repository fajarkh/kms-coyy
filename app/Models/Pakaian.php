<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pakaian extends Model
{
    protected $table = 'pakaian';
    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
        'id_budaya',
    ];

    public function budaya()
    {
        return $this->belongsTo('App\Budaya');
    }
}
