<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TabButton extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;
    public string $dataTab;
    public function __construct($title, $dataTab)
    {
        $this->title = isset($title)?$title:"";
        $this->dataTab = isset($dataTab)?$dataTab:"";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.tab-button');
    }
}
