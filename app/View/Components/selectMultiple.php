<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class selectMultiple extends Component
{
    public $label;
    public $name;
    public $options;
    public $selectval;
    public function __construct($name,  $options, $label="", $selectval="")
    {
        $this->name = $name;
        $this->label = $label;
        $this->options = $options;
        $this->selectval = $selectval;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-multiple');
    }
}
