<?php

namespace App\Livewire;

use Livewire\Component;

class SelectDoctorCity extends Component
{
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select City', 'Alaska', 'Los Angeles' ];
    }
    public function render()
    {
        return view('livewire.select-doctor-city');
    }
}