<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\City;

class IndexController extends Controller
{
    public function details($id) {
        $info = Company::where('id',$id)
                        ->with('city_rel')
                        ->with('city_rel.regio_rel')
                        ->get();

        return view('guest.details',[
            'info'=>$info
        ]);
    }

    public function map() {
        $cities = City::all();
        $companies = Company::all();

        return view('guest.map',[
            'cities'=>$cities,
            'companies'=>$companies
        ]);
    }
}
