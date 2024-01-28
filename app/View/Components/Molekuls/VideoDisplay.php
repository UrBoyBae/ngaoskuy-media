<?php

namespace App\View\Components\Molekuls;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VideoDisplay extends Component
{
    /**
     * Create a new component instance.
     */
    public string $id;
    public string $video_link;
    public string $judul;
    public string $name;
    public string $route;
    
    public function __construct($data, $route)
    {
        $this->id = isset($data->id)?$data->id:"";
        $this->video_link = isset($data->video_link)?$data->video_link:"";
        $this->judul = isset($data->judul->name)?$data->judul->name:"";
        $this->name = isset($data->name)?$data->name:"";
        $this->route = isset($route)?$route:"";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molekuls.video-display');
    }
}
