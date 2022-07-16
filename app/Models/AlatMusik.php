<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class AlatMusik extends Model
{
    protected $table = 'alat_musik';
    protected $fillable = [
        'nama',
        'gambar',
        'deskripsi',
        'id_budaya',
    ];
    protected $appends = ['ringkasan'];

    public function getRingkasanAttribute()
    {
        return Str::limit(strip_tags($this->deskripsi), 100, '...');
    }

    public function budaya()
    {
        return $this->belongsTo('App\Budaya');
    }
}
