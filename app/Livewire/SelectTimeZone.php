<?php

namespace App\Livewire;

use Livewire\Component;

class SelectTimeZone extends Component
{
    public $selectedOption1;
    public $options1;
    public $options2;
 
    public function mount($timezonedata)
 {
        $this->options1 = ['Select TimeZone','(UTC +5:30) Antarctica/Palmer','(UTC+05:30) India'];
        $this->options2 = $timezonedata; 
    }
    public function render()
    {
        return view('livewire.select-time-zone');
    }
}
