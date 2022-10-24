<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;

class Profil extends Model
{
    use LogsActivity;
    protected $table = 'profil';
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
    protected static $logName = 'profil';


    public function getRingkasanAttribute()
    {
        return Str::limit(strip_tags($this->deskripsi), 150, '...');
    }

    public function urlGambar()
    {
        return $this->gambar ? asset("storage/uploads/{$this->getTable()}/{$this->gambar}") : asset('avision/images/no-image.png');
    }

    public function urlPost()
    {
        return route('post.show', ['model' => 'Profil', 'id' => $this->id]);
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
