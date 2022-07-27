<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class AdatPernikahan extends Model
{
    use LogsActivity;
    protected $table = 'adat_pernikahan';
    protected $fillable = [
        'nama',
        'deskripsi',
        'gambar',
        'id_budaya',
    ];
    protected $appends = ['ringkasan'];

    //log activty config
    protected static $logAttributes = ['nama', 'gambar'];
    protected static $recordEvents = ['created', 'updated'];
    protected static $logName = 'adat_pernikahan';

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
