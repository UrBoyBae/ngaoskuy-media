<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadcrumbTwoIndex extends Component
{
    /**
     * Create a new component instance.
     */
    public string $firstIndexName;
    public string $firstIndexRoute;
    public string $secondIndexName;
    
    public function __construct($firstIndexName, $firstIndexRoute, $secondIndexName)
    {
        $this->firstIndexName = isset($firstIndexName)?$firstIndexName:"";
        $this->firstIndexRoute = isset($firstIndexRoute)?$firstIndexRoute:"";
        $this->secondIndexName = isset($secondIndexName)?$secondIndexName:"";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.breadcrumb-two-index');
    }
}
