<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    /**
     * @var string
     */
    protected $table = 'sejarah';

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
