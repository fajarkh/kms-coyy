<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdatPernikahan extends Model
{
    protected $table = 'adat_pernikahan';
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
