<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Company;

class LwRegisterform extends Component
{
    public $verbonden = [];

    public function render()
    {
        $companies = Company::orderBy('company','asc')->get();

        return view('livewire.lw-registerform',[
            'companies'=>$companies
        ]);
    }
}
