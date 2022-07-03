<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RumahAdat extends Model
{
    protected $table = 'rumah_adat';
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
