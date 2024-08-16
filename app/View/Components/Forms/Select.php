<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
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


    public function render(): View|Closure|string
    {
        return view('components.forms.select');
    }
}
