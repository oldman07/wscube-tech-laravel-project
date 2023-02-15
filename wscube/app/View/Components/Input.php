<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
     public $host;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($host)
    {
         $this->host = $host;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
