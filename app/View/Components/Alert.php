<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * @param string $type // error, success , warning
     * @param string $message
     */
    public function __construct(
        public string $type,
        public string $message,
    ) {}

    /**
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
