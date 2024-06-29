<?php

namespace App\Livewire;

use Livewire\Component;

class SelectCurrencySymbol extends Component
 {
    public $selectedOption1;
    public $options1;
    public $options2;

    public function mount($currencysymboldata)
 {
        $this->options1 = ['Select Currency', '$', '₹', '£', '€' ];
        $this->options2 = $currencysymboldata;
    }

    public function render()
 {
        return view( 'livewire.select-currency-symbol');
    }
}
