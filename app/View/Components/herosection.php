<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class herosection extends Component
{
    /**
     * Create a new component instance.
     */
    public $heading;
    public $hero;
    public $heroheading;
    public $heropara;
    
    public function __construct($heading,$hero,$heroheading,$heropara)
    {
        $this->heading=$heading;
        $this->hero=$hero;
        $this->heroheading=$heroheading;
        $this->heropara=$heropara;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.herosection');
    }
}
