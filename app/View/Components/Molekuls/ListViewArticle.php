<?php

namespace App\View\Components\Molekuls;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListViewArticle extends Component
{
    /**
     * Create a new component instance.
     */
    public string $id;
    public string $name;
    public string $content;
    public string $created_at;
    public string $updated_at;
    public string $route;
    public string $role;
    
    public function __construct($data, $route)
    {
        $this->id = isset($data->id)?$data->id:"";
        $this->name = isset($data->name)?$data->name:"";
        $this->content = isset($data->content)?$data->content:"";
        $this->created_at = isset($data->created_at)?$data->created_at:"";
        $this->updated_at = isset($data->updated_at)?$data->updated_at:"";
        $this->route = isset($route)?$route:"";
        $arr_route = explode(".", $this->route);
        $this->role = $arr_route[0];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molekuls.list-view-article');
    }
}
