<?php

namespace App\Livewire;

use Livewire\Component;

class SelectTimeFormat extends Component
{
    public $selectedOption1;
    public $options1;
    public $options2;


    public function mount($timeformatdata)
 {
        $this->options1 = [ 'Select TimeFormat', '12 Hours','24 Hours','36 Hours','48 Hours','60 Hours' ];
        $this->options2 = $timeformatdata;
    }
    public function render()
    {
        return view('livewire.select-time-format');
    }
}
