<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Senjata extends Model
{
    protected $table = 'senjata';
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
