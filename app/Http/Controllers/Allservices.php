<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class Allservices extends Controller
{
    public function index($type)
    {
        $servicies = Services::whereType($type)->get();
        $service_Types = ['periodic_services' => 'Periodic Services',
            'denting_painting' => 'Denting & Painting',
            'batteries' => 'Batteries',
            'car_spa_cleaning' => 'Car Spa & Cleaning',
            'ac_service_repair' => 'AC Service & Repair',
            'tyres_wheel_care' => 'Tyres & Wheel Care',
            'windshields_lights' => 'Windshields & Lights',
            'clutch_fitments' => 'Clutch & Fitments'
        ];
        return view('user/periodic_service')->with('servicies', $servicies)
            ->with('service_Types', $service_Types);
    }
}
