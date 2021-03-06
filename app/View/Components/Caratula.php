<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Caratula extends Component
{
    public $pelicula;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pelicula)
    {
        $this->pelicula=$pelicula;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.caratula');
    }
}
