<?php

namespace Avendor\Site\Http\Livewire\Header;

use Livewire\Component;

class Frontent extends Component
{
    public function render()
    {
        return view('site::livewire.header.frontent', [
            "say" => "Hello, World!"
        ]);
    }
}
