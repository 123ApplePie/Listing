<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Region;
use App\Models\City;
use App\Models\Company;

class footprint extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        //DRENTHE
        $cities_drenthe = City::where('region',01)->get();
        
        foreach ($cities_drenthe as $city) {
            $id_drenthe[] = $city['id'];
        }

        $companies_drenthe = Company::whereIn('city_id', $id_drenthe)->get();

        // Friesland (02)
        $cities_friesland = City::where('region', 02)->get();
        foreach ($cities_friesland as $city) {
            $id_friesland[] = $city['id'];
        }
        $companies_friesland = Company::whereIn('city_id', $id_friesland)->get();

        // Gelderland (03)
        $cities_gelderland = City::where('region', 03)->get();
        foreach ($cities_gelderland as $city) {
            $id_gelderland[] = $city['id'];
        }
        $companies_gelderland = Company::whereIn('city_id', $id_gelderland)->get();

        // Groningen (04)
        $cities_groningen = City::where('region', 04)->get();
        foreach ($cities_groningen as $city) {
            $id_groningen[] = $city['id'];
        }
        $companies_groningen = Company::whereIn('city_id', $id_groningen)->get();

        // Limburg (05)
        $cities_limburg = City::where('region', 05)->get();
        foreach ($cities_limburg as $city) {
            $id_limburg[] = $city['id'];
        }
        $companies_limburg = Company::whereIn('city_id', $id_limburg)->get();

        // Noord-Brabant (06)
        $cities_noord_brabant = City::where('region', '06')->get();
        foreach ($cities_noord_brabant as $city) {
            $id_noord_brabant[] = $city['id'];
        }
        $companies_noord_brabant = Company::whereIn('city_id', $id_noord_brabant)->get();

        // Noord-Holland (07)
        $cities_noord_holland = City::where('region', 07)->get();
        foreach ($cities_noord_holland as $city) {
            $id_noord_holland[] = $city['id'];
        }
        $companies_noord_holland = Company::whereIn('city_id', $id_noord_holland)->get();

        // Utrecht (09)
        $cities_utrecht = City::where('region', 9)->get();
        foreach ($cities_utrecht as $city) {
            $id_utrecht[] = $city['id'];
        }
        $companies_utrecht = Company::whereIn('city_id', $id_utrecht)->get();

        // Zeeland (10)
        $cities_zeeland = City::where('region', 10)->get();
        foreach ($cities_zeeland as $city) {
            $id_zeeland[] = $city['id'];
        }
        $companies_zeeland = Company::whereIn('city_id', $id_zeeland)->get();

        // Zuid-Holland (11)
        $cities_zuid_holland = City::where('region', 11)->get();
        foreach ($cities_zuid_holland as $city) {
            $id_zuid_holland[] = $city['id'];
        }
        $companies_zuid_holland = Company::whereIn('city_id', $id_zuid_holland)->get();

        // Overijssel (15)
        $cities_overijssel = City::where('region', 15)->get();
        foreach ($cities_overijssel as $city) {
            $id_overijssel[] = $city['id'];
        }
        $companies_overijssel = Company::whereIn('city_id', $id_overijssel)->get();

        // Flevoland (16)
        $cities_flevoland = City::where('region', 16)->get();
        foreach ($cities_flevoland as $city) {
            $id_flevoland[] = $city['id'];
        }
        $companies_flevoland = Company::whereIn('city_id', $id_flevoland)->get();






        // $regions_first = Region::all()->take(6);
        // $regions_second = Region::all()->skip(6);
        // dd($regions_first[0]['steden_rel']);



        return view('components.footprint', [
            'companies_drenthe' => $companies_drenthe,
            'companies_friesland' => $companies_friesland,
            'companies_gelderland' => $companies_gelderland,
            'companies_groningen' => $companies_groningen,
            'companies_limburg' => $companies_limburg,
            'companies_noord_brabant' => $companies_noord_brabant,
            'companies_noord_holland' => $companies_noord_holland,
            'companies_utrecht' => $companies_utrecht,
            'companies_zeeland' => $companies_zeeland,
            'companies_zuid_holland' => $companies_zuid_holland,
            'companies_overijssel' => $companies_overijssel,
            'companies_flevoland' => $companies_flevoland,
        ]);        
    }
}
