<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\City;
use App\Models\Region;

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

    public function provincie($slug){
        $region = Region::where('slug',$slug)->get();
        $region_code = $region[0]['region_code'];
        // dd($region_code);

        return view('guest.provincie',[
            'region_code'=>$region_code,
            'region'=>$region
        ]);
    }

    public function percity($regio_slug, $city){
        // dd($regio_slug);
        // dd($city);
        $regio = $regio_slug;
        $stad = $city;

        return view('guest.percity',[
            'regio'=>$regio,
            'stad'=>$stad
        ]);
    }
}
