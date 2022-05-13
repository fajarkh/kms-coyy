<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SmallBox extends Component
{
    public $bg;
    public $loading;
    public $item;
    public $unit;
    public $title;
    public $icon;
    public $footer;
    public function __construct($bg, $loading, $item, $unit, $title, $icon, $footer = false)
    {
        $this->bg = $bg;
        $this->icon = $icon;
        $this->title = $title;
        $this->loading = $loading;
        $this->item = $item;
        $this->unit = $unit;
        $this->footer = $footer;
    }

    public function render()
    {
        return view('components.small-box');
    }
}
