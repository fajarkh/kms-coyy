<?php

namespace App\View\Components;

use Illuminate\View\Component;

class InfoBox extends Component
{
    public $bg;
    public $icon;
    public $title;
    public $subtitle;
    public $shadow;
    public function __construct($bg, $icon, $title, $subtitle, $shadow = null)
    {
        $this->bg = $bg;
        $this->icon = $icon;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->shadow = $shadow;
    }

    public function render()
    {
        return view('components.info-box');
    }
}
