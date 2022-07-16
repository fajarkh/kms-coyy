<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Sejarah extends Model
{
    protected $table = 'sejarah';

    protected $fillable = [
        'nama',
        'deskripsi',
        'budayai_id',
        'gambar',
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
