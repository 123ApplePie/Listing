<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Region;
use App\Models\City;
use App\Models\Company;

class LwHero extends Component
{
    public $search = '';
    public $provincie = '';
    public $stad = '';

    public function render()
    {

        $regions = Region::all();

        if (!empty($this->provincie)) {
            $cities = City::where('region',$this->provincie)->get();
        } else {
            $cities = '';
        }

        if (!empty($this->provincie) && !empty($this->stad) && empty($this->search)) {
            $results = Company::where('city_id',$this->stad)->get();
            // dd($result);
        } elseif (empty($this->provincie) && empty($this->stad) && !empty($this->search)) {
            $results = Company::where('company', 'LIKE', '%'.$this->search.'%')
                                ->orWhere('phone','LIKE','%'.$this->search.'%')
                                ->get();
        } 
        else {
            $results = '';
        }

        return view('livewire.lw-hero',[
            'regions'=>$regions,
            'cities'=>$cities,
            'results'=>$results
        ]);
    }
}
