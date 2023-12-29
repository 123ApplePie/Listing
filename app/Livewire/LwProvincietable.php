<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Company;

class LwProvincietable extends Component
{
    public $search;
    public $region_code;

    public function mount($region_code)
    {
        $this->region_code = $region_code;
    }

    public function render()
    {

        if (empty($this->search)) {
            $id = $this->region_code;

            $companies = Company::with('city_rel')
                                ->whereHas('city_rel', function($q) use($id){$q
                                ->where('region', '=', $id);
                                })
                                ->orderBy('id', 'desc')
                                ->get();
        } else {
            $id = $this->search;

            $companies = Company::with('city_rel')
                                ->whereHas('city_rel', function($q) use($id){$q
                                ->where('region', '=', $this->region_code)
                                ->where('accentcity', 'LIKE', '%'.$id.'%');
                                })
                                ->orWhere('company', 'LIKE', '%'.$id.'%')
                                ->get();
        }

        return view('livewire.lw-provincietable',[
            'companies'=>$companies
        ]);
    }
}


// $tickets = Ticket::with('gebruiker_relation')
//                                  ->whereHas('gebruiker_relation', function($q) use($id){$q
//                                  ->where('werkzaam', '=', $id); 
//                                 })
//                                 ->orderBy('id', 'desc')
//                                 ->get();