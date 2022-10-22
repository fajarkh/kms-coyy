<?php

namespace App\Http\Controllers;

use App\Models\Budaya;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function __construct()
    {
        $this->view = 'post';
        $this->shareView(['type' => 'front']);
    }

    public function kategori($kategori)
    {
        $model = [];
        switch ($kategori) {
            case 'Semua':
                $model =  $this->getData('Semua')->chunk(4);
                $kategori = '';
                break;
            case 'Adat':
                $model = $this->getData('Adat')->chunk(4);
                $kategori = $this->setTitle($kategori);
                break;
            default:
                $model = app("App\\Models\\" . $kategori)->orderBy('updated_at', 'desc')->get()->chunk(4);
                $kategori = $this->setTitle($kategori);
                break;
        }
        return view('layouts.user.category', compact('kategori', 'model'));
    }

    public function show($model, $id)
    {
        $model = app("App\\Models\\" . $model);
        $post = $model->find($id);
        $shareLink = \Share::page(url()->full(), $post->nama)->facebook()->twitter()->whatsapp()->telegram()->getRawLinks();

        return view($this->view . '.show', compact('post', 'shareLink'));
    }

    private function getData($type)
    {
        if ($type == 'Adat') {
            return collect([])
                ->concat(app("App\\Models\\AdatLahiran")->orderBy('updated_at', 'desc')->get())
                ->concat(app("App\\Models\\AdatPernikahan")->orderBy('updated_at', 'desc')->get());
        }
        if ($type == 'Semua') {
            $model = Budaya::with([
                'alatmusik',
                'rumahAdat',
                'adatLahiran',
                'adatPernikahan',
                'senjata',
                'ceritaRakyat',
                'sejarah',
                'tradisiTabuko',
                'tradisiNugal',
                'tradisiHudoq',
                'tradisiBelikong'
            ])->first();
            return collect($model->getRelations())->flatten(1);
        }
    }

    private function setTitle($string)
    {
        return ' | ' . preg_replace('/(?<!\ )[A-Z]/', ' $0', $string);
    }
}
