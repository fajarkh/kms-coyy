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
        return $this->belongsTo('App\Budaya');
    }

    public function getRingkasanAttribute()
    {
        return Str::limit(strip_tags($this->deskripsi), 100, '...');
    }
}
