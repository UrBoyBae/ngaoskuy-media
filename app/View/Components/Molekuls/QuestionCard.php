<?php

namespace App\View\Components\Molekuls;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QuestionCard extends Component
{
    /**
     * Create a new component instance.
     */
    public string $id;
    public string $subject;
    public string $question;
    public string $status;
    
    public function __construct($data)
    {
        $this->id = $data->id;
        $this->subject = $data->subject;
        $this->question = $data->question;
        $this->status = $data->status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molekuls.question-card');
    }
}
