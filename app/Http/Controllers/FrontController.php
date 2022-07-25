<?php

namespace App\Http\Controllers;

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
                $model = [];
                $kategori = '';
                break;
            case 'Adat':
                $model = $this->getAdatData()->chunk(4);
                $kategori = $this->setTitle($kategori);
                break;
            default:
                $model = app("App\\Models\\" . $kategori)->all()->chunk(4);
                $kategori = $this->setTitle($kategori);
                break;
        }
        return view('layouts.user.category', compact('kategori', 'model'));
    }

    public function show($model, $id)
    {
        $model = app("App\\Models\\" . $model);
        $post = $model->find($id);
        return view($this->view . '.show', compact('post'));
    }

    private function getAdatData()
    {
        return collect([])
            ->concat(app("App\\Models\\AdatLahiran")->all())
            ->concat(app("App\\Models\\AdatPernikahan")->all());
    }

    private function setTitle($string)
    {
        return ' | ' . preg_replace('/(?<!\ )[A-Z]/', ' $0', $string);
    }
}
