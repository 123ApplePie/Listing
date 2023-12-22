<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Region;
use App\Models\City;

class LwHero extends Component
{
    public $search = '';
    public $provincie = '';

    public function render()
    {

        $regions = Region::all();

        if (!empty($this->provincie)) {
            $cities = City::where('region',$this->provincie)->get();
        } else {
            $cities = '';
        }

        return view('livewire.lw-hero',[
            'regions'=>$regions,
            'cities'=>$cities
        ]);
    }
}
