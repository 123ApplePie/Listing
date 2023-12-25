<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

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
}
