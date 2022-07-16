<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CeritaRakyat extends Model
{
    /**
     * @var string
     */
    protected $table = 'cerita_rakyat';

    /**
     * @var array
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'budayai_id',
        'gambar',
    ];

    public function budaya()
    {
        return $this->belongsTo('App\Budaya');
    }
}
