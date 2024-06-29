<?php

namespace App\Livewire;

use Livewire\Component;

class SelectDateFormat extends Component
{
    public $selectedOption1;
    public $options1;
    public $options2;

    public function mount($dateformatdata)  
 {
        $this->options1 = [ 'Select DateFormat', '15 May 2023','15/05/2023','15.05.2023','15-05-2023','05/15/2023','2023/05/15','2023-05-15' ];
        $this->options2 = $dateformatdata;
    }
    public function render()
    {
        return view('livewire.select-date-format');
    }
}
