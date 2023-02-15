<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Begginer_input extends Component
{
    // public $type;
    public $label;
    // public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label)
    {
    //    $this->type = $type;
       $this->label = $label;
    //    $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.begginer_input');
    }
}
