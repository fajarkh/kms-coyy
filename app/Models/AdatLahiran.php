<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdatLahiran extends Model
{
    protected $table = 'adat_lahiran';
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
