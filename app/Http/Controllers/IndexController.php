<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\City;
use App\Models\Region;

class IndexController extends Controller
{
    public function details($company) {
        $info = Company::where('company',$company)
                        ->with('city_rel')
                        ->with('city_rel.regio_rel')
                        ->get();

        $title = $info->first()->company;
        $description = "De gegevens en informatie van " . $info->first()->company;
        
        return view('guest.details',[
            'info'=>$info,
            'title'=>$title
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

        $title = $region->first()->region;
        $description = "Alle dierenartsen in " . $region->first()->region;

        return view('guest.provincie',[
            'region_code'=>$region_code,
            'region'=>$region,
            'title'=>$title
        ]);
    }

    public function percity($regio_slug, $city){
        $regio = $regio_slug;
        $stad = $city;

        $title = $stad;
        $description = "Alle dierenartsen in " . $stad;

        return view('guest.percity',[
            'regio'=>$regio,
            'stad'=>$stad,
            'title'=>$title
        ]);
    }
}
