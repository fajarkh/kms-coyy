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
    public $toggle;

    public function __construct($type, $title, $toggle = null)
    {
        $this->type = $type;
        $this->title = $title;
        $this->title = $title;
        $this->toggle = $toggle;
    }

    public function isToggle(): String
    {
        if ($this->toggle) {
            return 'data-toggle=modal data-target=#' . $this->toggle;
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
