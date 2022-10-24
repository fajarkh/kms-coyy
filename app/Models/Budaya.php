<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    protected $table = 'budaya';
    protected $fillable = [
        'nama',
        'user_id',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function alatMusik()
    {
        return $this->hasMany('App\Models\AlatMusik');
    }

    public function rumahAdat()
    {
        return $this->hasMany('App\Models\RumahAdat');
    }

    public function adatLahiran()
    {
        return $this->hasMany('App\Models\AdatLahiran');
    }

    public function adatPernikahan()
    {
        return $this->hasMany('App\Models\AdatPernikahan');
    }

    public function senjata()
    {
        return $this->hasMany('App\Models\Senjata');
    }

    public function ceritaRakyat()
    {
        return $this->hasMany('App\Models\CeritaRakyat');
    }

    public function sejarah()
    {
        return $this->hasMany('App\Models\Sejarah');
    }

    public function tradisiTabuko()
    {
        return $this->hasMany('App\Models\TradisiTabuko');
    }

    public function tradisiNugal()
    {
        return $this->hasMany('App\Models\TradisiNugal');
    }

    public function tradisiHudoq()
    {
        return $this->hasMany('App\Models\TradisiHudoq');
    }

    public function tradisiBelikong()
    {
        return $this->hasMany('App\Models\TradisiBelikong');
    }

    public function getLatestPengetahuan($limit = null)
    {
        $items = collect($this->senjata()->get())
            ->concat($this->sejarah()->get())
            ->concat($this->alatMusik()->get())
            ->concat($this->rumahAdat()->get())
            ->concat($this->adatLahiran()->get())
            ->concat($this->adatPernikahan()->get())
            ->concat($this->ceritaRakyat()->get())
            ->concat($this->tradisiTabuko()->get())
            ->concat($this->tradisiNugal()->get())
            ->concat($this->tradisiHudoq()->get())
            ->concat($this->tradisiBelikong()->get())
            ->sortBy('created_at');
        if ($limit) {
            return $items->take($limit);
        }
        return $items;
    }
}
