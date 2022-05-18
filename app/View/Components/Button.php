<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $title;
    public $id;
    public $openModal;

    public function __construct($type, $title, $id = null, $openModal = null)
    {
        $this->type = $type;
        $this->title = $title;
        $this->id = $id;
        $this->title = $title;
        $this->openModal = $openModal;
    }

    public function isToggle(): String
    {
        return $this->openModal ? 'data-toggle=modal data-target=#' . $this->openModal : '';
    }

    public function hasId(): String
    {
        return $this->id ? 'id=' . $this->id : '';
    }

    public function render()
    {
        return view('components.button');
    }
}
