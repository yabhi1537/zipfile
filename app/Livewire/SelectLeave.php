<?php

namespace App\Livewire;

use Livewire\Component;

class SelectLeave extends Component
 {
    public $selectedOption1;
    public $options1;

    public function mount()
 {
        $this->options1 = [ 'Select Leave Type', 'Medical Leave', 'Casual Leave', 'Loss of Pay' ];
    }

    public function render()
 {
        return view( 'livewire.select-leave' );
    }
}
