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
        return view('layouts.user.list');
    }

    public function show($model, $id)
    {
        $model = app("App\\Models\\" . $model);
        $post = $model->find($id);
        return view($this->view . '.show', compact('post'));
    }
}
