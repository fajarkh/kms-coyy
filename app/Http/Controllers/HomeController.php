<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $countAdmin = User::where('level', 1)->get()->count();
        $models = [
            'CeritaRakyat', 'Sejarah', 'AlatMusik', 'RumahAdat', 'AdatLahiran', 'AdatPernikahan', 'Senjata', 'TradisiTabuko',
            'TradisiNugal',
            'TradisiHudoq',
            'TradisiBelikong',
        ];
        foreach ($models as $model) {
            $countPengetahuan += app("App\\Models\\" . $model)->count();
        }
        return view('dashboard', compact('countPengetahuan', 'countAdmin'));
    }
}
