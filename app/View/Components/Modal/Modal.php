<?php

namespace App\View\Components\Modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public $id;
    public $title;
    public $size;
    public $body;
    public $footer;
    /**
     * Create a new component instance.
     */
    public function __construct( $id, $title,$size, $body = null, $footer = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->size = $size;
        $this->body = $body;
        $this->footer = $footer;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.modal');
    }
}
