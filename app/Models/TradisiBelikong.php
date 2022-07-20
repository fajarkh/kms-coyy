<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class TradisiBelikong extends Model
{
    protected $table = 'tradisi_belikong';
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

    public function getKategoriAttribute()
    {
        return preg_replace('/(?<!\ )[A-Z]/', ' $0', class_basename($this));
    }
    
    public function budaya()
    {
        return $this->belongsTo('App\Models\Budaya');
    }
    
}
