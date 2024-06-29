<?php

namespace App\Livewire;

use Livewire\Component;

class SelectCountry extends Component
{
    public $selectedOption1;
    public $options1;
    public $options2;

    public function mount($option2)
    {
        $this->options1 = [ 'Select Country', 'India','London','France','USA' ];
        $this->options2 = $option2;
    }
    public function render()
    {
        return view('livewire.select-country');
    }
}
