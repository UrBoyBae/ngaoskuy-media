<?php

namespace App\View\Components\Molekuls;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoCard extends Component
{
    /**
     * Create a new component instance.
     */
    public string $id;
    public string $thumbnail;
    public string $name;
    public string $route;
    
    public function __construct($data, $route)
    {
        $this->id = isset($data->id)?$data->id:"";
        $this->thumbnail = isset($data->episode->first()->thumbnail)?$data->episode->first()->thumbnail:"";
        $this->name = isset($data->name)?$data->name:"";
        $this->route = isset($route)?$route:"";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molekuls.video-card');
    }
}
