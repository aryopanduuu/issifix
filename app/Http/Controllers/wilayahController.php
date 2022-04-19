<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class wilayahController extends Controller
{
    public function form()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();
        
        return view('event.mlc.registration.registration', compact('provinces', 'regencies', 'districts', 'villages'));
    }
}
