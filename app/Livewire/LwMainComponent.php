<?php

namespace App\Livewire;

use Livewire\Component;

class LwMainComponent extends Component
{
    public $region;
    public $region_code;

    public function mount($region, $region_code)
    {
        $this->region = $region;
        $this->region_code = $region_code;
    }
    
    public function render()
    {
        return view('livewire.lw-main-component');
    }
}
