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
    public $openModal;

    public function __construct($type, $title, $openModal = null)
    {
        $this->type = $type;
        $this->title = $title;
        $this->title = $title;
        $this->openModal = $openModal;
    }

    public function isToggle(): String
    {
        if ($this->openModal) {
            return 'data-toggle=modal data-target=#' . $this->openModal;
        } else {
            return '';
        }
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.button');
    }
}
