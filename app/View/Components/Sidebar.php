<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sidebar extends Component
{

    public $title;
    public $params;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $params)
    {
        $this->title = $title;
        $this->params = $params;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
