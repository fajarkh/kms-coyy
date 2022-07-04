<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpacaraAdat extends Model
{
    protected $table = 'upacara_adat';
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
