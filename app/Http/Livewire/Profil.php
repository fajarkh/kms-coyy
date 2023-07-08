<?php

namespace App\Http\Livewire;

use App\Models\Profil as ModelsProfil;
use Livewire\Component;

class Profil extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        $items = ModelsProfil::orderBy('updated_at', 'desc')->get()->take(3);
        return view('layouts.user.wire-profil', ['items' => $this->readyToLoad ? $items : []]);
    }
}
