<?php

namespace App\View\Components\Organisme;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QuestionSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public array $arr_data;
    public string $role;
    
    public function __construct($data, $role)
    {
        $this->arr_data = $data;
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.organisme.question-slider');
    }
}
