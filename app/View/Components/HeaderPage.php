<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderPage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $button;
    public $heading;
    public $buttonID; 
    public $routeLink;
    public $message;
    public function __construct($button, $heading, $buttonID,$routeLink, $message)
    {
        $this->button = $button;
        $this->heading =$heading;
        $this->buttonID = $buttonID;
        $this->routeLink = $routeLink;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-page');
    }
}
