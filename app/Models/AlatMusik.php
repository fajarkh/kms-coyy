<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlatMusik extends Model
{
    protected $table = 'alat_musik';
    protected $fillable = [
        'nama',
        'deskripsi',
        'id_budaya',
    ];

    public function budaya()
    {
        return $this->belongsTo('App\Budaya');
    }
}
