<?php

namespace App\View\Components\Organisme;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public array $arr_data;
    
    public function __construct($data)
    {
        $this->arr_data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.organisme.article-slider');
    }
}
