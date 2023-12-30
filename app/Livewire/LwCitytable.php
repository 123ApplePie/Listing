<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\Region;

class LwCitytable extends Component
{
    public $stad = '';
    public $region_code;

    public function mount($region_code)
    {
        $this->region_code = $region_code;
    }

    public function render()
    {
        // dd($this->region_code);

        if (empty($this->stad)) {
            $cities = City::with('regio_rel')
                            ->where('region',$this->region_code)
                            ->orderBy('accentcity','asc')
                            ->paginate(20);
        } else {
            $cities = City::with('regio_rel')
                            ->where('region',$this->region_code)
                            ->where('accentcity', 'LIKE', '%'.$this->stad.'%')
                            ->get();
        }

        return view('livewire.lw-citytable',[
            'cities'=>$cities
        ]);
    }
}
