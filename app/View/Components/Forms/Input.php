<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    public $label;
    public $name;

    public $checked;

    public function __construct($name, $label="", $checked=0)
    {
        $this->name = $name;
        $this->label = $label;
        $this->checked = $checked;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
