<?php

namespace App\View\Components;

use App\Models\Gender;
use Illuminate\View\Component;

class RegisterUser extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $genders = Gender::all();
        return view('components.register-user',['genders'=>$genders]);
    }
}
