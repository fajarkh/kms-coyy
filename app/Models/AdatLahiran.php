<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class AdatLahiran extends Model implements Searchable
{
    use LogsActivity;

    protected $table = 'adat_lahiran';
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
    protected static $logName = 'adat_lahiran';

    public function getSearchResult(): SearchResult
    {
        $url = route('post.show', ['model' => class_basename($this), 'id' => $this->id]);
        return new SearchResult($this, $this->nama, $url);
    }

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
