<?php

namespace App\View\Components\Page;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RoleList extends Component
{
    public $role;
    /**
     * Create a new component instance.
     */
    public function __construct($role)
    {
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page.role-list');
    }
}
