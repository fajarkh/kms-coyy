<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class CeritaRakyat extends Model
{
    use LogsActivity;

    protected $table = 'cerita_rakyat';
    protected $fillable = [
        'nama',
        'deskripsi',
        'budayai_id',
        'gambar',
    ];
    protected $appends = ['ringkasan'];

    //log activty config
    protected static $logAttributes = ['nama', 'gambar'];
    protected static $recordEvents = ['created', 'updated'];
    protected static $logName = 'cerita_rakyat';

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
