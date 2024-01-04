<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\City;
use App\Models\Region;
use App\Models\Company;

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

        if (empty($this->stad)) {
            $id = $this->region_code;

            $companies = Company::with('city_rel')
                                ->whereHas('city_rel', function($q) use($id){$q
                                ->where('region', '=', $id);
                                })
                                ->orderBy('id', 'desc')
                                ->get();
    
            foreach ($companies as $company) {
                            $ids[] = $company['city_id'];   //Create an array of the city_id's with companies
                    }
    
            $cities = City::whereIn('id',$ids)              //Get the city if the id is in the array
                            ->with('regio_rel')
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
