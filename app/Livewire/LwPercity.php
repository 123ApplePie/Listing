<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Company;

class LwPercity extends Component
{
    public $search;
    public $regio;
    public $stad;

    public function mount($regio,$stad)
    {
        $this->regio = $regio;
        $this->stad = $stad;
    }

    use WithPagination;

    public function render()
    {

        if (empty($this->search)) {
            $id = $this->stad;

            $companies = Company::with('city_rel')
                                ->whereHas('city_rel', function($q) use($id){$q
                                ->where('city', '=', $id);
                                })
                                ->orderBy('id', 'desc')
                                ->paginate(20);        
        } else {
            $id = $this->search;

            $companies = Company::with('city_rel')
                                ->where('company', 'LIKE', '%'.$id.'%')
                                ->get();
        }

        return view('livewire.lw-percity',[
            'companies'=>$companies
        ]);
    }
}
