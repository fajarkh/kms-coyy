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
        return $this->belongsTo('App\User');
    }

    public function alatMusik()
    {
        return $this->hasMany('App\AlatMusik');
    }

    public function rumahAdat()
    {
        return $this->hasMany('App\RumahAdat');
    }

    public function adatLahiran()
    {
        return $this->hasMany('App\AdatLahiran');
    }
    
    public function adatPerkawinan()
    {
        return $this->hasMany('App\AdatPerkawinan');
    }

    public function pakaian()
    {
        return $this->hasMany('App\Pakaian');
    }

    public function senjata()
    {
        return $this->hasMany('App\Senjata');
    }
}
