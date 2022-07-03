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
}
