<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TradisiHudoq extends Model
{
    protected $table = 'tradisi_hudoq';
    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
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