<?php

namespace App\Livewire;

use Livewire\Component;

class SelectGender extends Component
{
    public $selectedOption1;  
    public $options1;
    public $options2;
    
    public function mount($option2)
    {
        $this->options1 = [ 'Select Gender', 'Male', 'Female' ];
        $this->options2 = $option2;
    }
    public function render()
    {
        return view('livewire.select-gender');
       
    }
}
