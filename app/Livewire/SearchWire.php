<?php

namespace App\Livewire;

use Livewire\Component;

class SearchWire extends Component
{
    public $search = 'hello';
    public function render()
    {
        return view('components.table-header');
    }
}
