<?php

namespace App\View\Components\Molekuls;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ArticleCard extends Component
{
    /**
     * Create a new component instance.
     */
    public string $id;
    public string $subject;
    public string $date;
    
    public function __construct($data)
    {
        $this->id = $data->id;
        $this->subject = $data->subject;
        $this->date = $data->date;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molekuls.article-card');
    }
}
