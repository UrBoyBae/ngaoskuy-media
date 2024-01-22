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
    public string $id_user;
    public string $username;
    public string $id_episode;
    public string $subject;
    public string $question;
    public string $tipe;
    public string $status;
    public string $created_at;
    public string $updated_at;
    public string $route;
    public string $width;
    
    public function __construct($data, $route="", $width="")
    {
        $this->id = isset($data->id)?$data->id:"";
        $this->id_user = isset($data->id_user)?$data->id_user:"";
        $this->username = isset($data->user->username)?$data->user->username:"";
        $this->id_episode = isset($data->id_episode)?$data->id_episode:"";
        $this->subject = isset($data->subject)?$data->subject:"";
        $this->question = isset($data->question)?$data->question:"";
        $this->tipe = isset($data->tipe)?$data->tipe:"";
        $this->status = isset($data->status)?$data->status:"";
        $this->created_at = isset($data->created_at)?$data->created_at:"";
        $this->updated_at = isset($data->updated_at)?$data->updated_at:"";
        $this->route = isset($route)?$route:"";
        $this->width = isset($width)&&$width!=""?$width:"full";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.molekuls.question-card');
    }
}
