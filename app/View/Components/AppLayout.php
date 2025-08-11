<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public $useSidebar;

    public function __construct($useSidebar = true)
    {
        $this->useSidebar = $useSidebar;
    }


    public function render(): View
    {
        return view('layouts.app');
    }
}
