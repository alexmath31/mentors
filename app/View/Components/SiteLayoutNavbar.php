<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SiteLayoutNavbar extends Component
{
    public array $menu_items;
    public function __construct()
    {
        $this->menu_items=['Dashboard', 'Team', 'Projects', 'Calendar', 'Reports'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.site-layout-navbar');
    }
}
