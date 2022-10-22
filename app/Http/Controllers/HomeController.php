<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $countPengetahuan = 0;
        $models = [
            'CeritaRakyat', 'Sejarah', 'AlatMusik', 'RumahAdat', 'AdatLahiran', 'AdatPernikahan', 'Senjata', 'TradisiTabuko',
            'TradisiNugal',
            'TradisiHudoq',
            'TradisiBelikong',
        ];
        foreach ($models as $model) {
            $countPengetahuan += app("App\\Models\\" . $model)->count();
        }
        return view('dashboard', compact('countPengetahuan'));
    }
}
