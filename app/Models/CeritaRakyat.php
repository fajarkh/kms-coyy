<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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
    protected $appends = ['ringkasan'];

    public function budaya()
    {
        return $this->belongsTo('App\Models\Budaya');
    }

    public function getRingkasanAttribute()
    {
        return Str::limit(strip_tags($this->deskripsi), 100, '...');
    }

    public function getKategoriAttribute()
    {
        return preg_replace('/(?<!\ )[A-Z]/', ' $0', class_basename($this));
    }
}
