<?php

namespace Avendor\Site\Http\Livewire;

use Livewire\Component;

class Frontend extends Component
{
    public function render()
    {
        return view('site::livewire.frontend',[
                        "module" => "Site"
                ])
                ->layout('site::layouts.master');
    }
}
