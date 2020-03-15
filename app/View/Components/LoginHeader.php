<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Gate;


class LoginHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function checkRole(){
        if (Gate::allows('teacher') || Gate::allows('admin')) {
            return true;
        }
        return false;

    }

    public function render()
    {

      return  view('components.loginHeader') ;


    }
}
