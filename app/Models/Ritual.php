<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ritual extends Model
{
    /**
     * @var string
     */
    protected $table = 'ritual';

    /**
     * @var array
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'jenis',
        'id_budaya',
    ];

    public static function dataRitual()
    {
        return [
            'kematian' => 'Kematian',
            'kelahiran' => 'Kelahiran',
        ];
    }
}
