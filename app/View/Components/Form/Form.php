<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ViewErrorBag;
use Illuminate\View\Component;

class Form extends Component
{
    public string $method;
    public bool $spoofMethod = false;

    public function __construct(string $method = 'POST')
    {
        $this->method = strtoupper($method);
        $this->spoofMethod = in_array($this->method, ['PUT', 'DELETE', 'PATCH']);
    }

    public function hasError($bag = 'default'): bool
    {
        $errors = session('errors', new ViewErrorBag());

        return $errors->getBag($bag)->isNotEmpty();
    }


    public function render(): View|Closure|string
    {
        return view('components.form.form');
    }
}
