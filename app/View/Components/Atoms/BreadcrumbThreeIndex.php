<?php

namespace App\View\Components\Atoms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadcrumbThreeIndex extends Component
{
    /**
     * Create a new component instance.
     */
    public string $firstIndexName;
    public string $firstIndexRoute;
    public string $secondIndexName;
    public string $secondIndexRoute;
    public string $idSecondIndexRoute;
    public string $thirdIndexName;

    public function __construct($firstIndexName, $firstIndexRoute, $secondIndexName, $secondIndexRoute, $thirdIndexName, $idSecondIndexRoute="")
    {
        $this->firstIndexName = isset($firstIndexName)?$firstIndexName:"";
        $this->firstIndexRoute = isset($firstIndexRoute)?$firstIndexRoute:"";
        $this->secondIndexName = isset($secondIndexName)?$secondIndexName:"";
        $this->secondIndexRoute = isset($secondIndexRoute)?$secondIndexRoute:"";
        $this->idSecondIndexRoute = isset($idSecondIndexRoute)&&$idSecondIndexRoute!=""?$idSecondIndexRoute:"";
        $this->thirdIndexName = isset($thirdIndexName)?$thirdIndexName:"";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.atoms.breadcrumb-three-index');
    }
}
