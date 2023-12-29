<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Region;

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
        $regions_first = Region::all()->take(6);
        $regions_second = Region::all()->skip(6);
        // dd($regions);

        return view('components.footprint',[
            'regions_first'=>$regions_first,
            'regions_second'=>$regions_second
        ]);
    }
}
