<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services      = Services::with('cate_name')->get();
        $service_Types = ['periodic_services'  => 'Periodic Services',
                          'denting_painting'   => 'Denting & Painting',
                          'batteries'          => 'Batteries',
                          'car_spa_cleaning'   => 'Car Spa & Cleaning',
                          'ac_service_repair'  => 'AC Service & Repair',
                          'tyres_wheel_care'   => 'Tyres & Wheel Care',
                          'windshields_lights' => 'Windshields & Lights',
                          'clutch_fitments'    => 'Clutch & Fitments',
        ];
        return view('admin.Services.index', compact('services'))
            ->with('service_Types', $service_Types);

    }

    public function create()
    {
        $categ         = Categories::all();
        $service_Types = ['periodic_services'  => 'Periodic Services',
                          'denting_painting'   => 'Denting & Painting',
                          'batteries'          => 'Batteries',
                          'car_spa_cleaning'   => 'Car Spa & Cleaning',
                          'ac_service_repair'  => 'AC Service & Repair',
                          'tyres_wheel_care'   => 'Tyres & Wheel Care',
                          'windshields_lights' => 'Windshields & Lights',
                          'clutch_fitments'    => 'Clutch & Fitments',
        ];

        return view('admin.Services.add_service', compact('categ'))
            ->with('service_Types', $service_Types);
    }

    public function store(Request $request)
    {
        $validated               = $request->validate([
            'categories_id' => 'required',
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required|numeric',
        ]);
        $services                = new Services();
        $services->Categories_id = $request->input('categories_id');
        $services->name          = $request->input('name');
        $services->Description   = $request->input('description');
        $services->Price         = $request->input('price');
        $services->type          = $request->input('service_type');
        if ($request->hasFile('services_image'))
        {
            $file      = $request->file('services_image');
            $extention = $file->getClientOriginalExtension();
            $filename  = time() . '.' . $extention;
            $file->move(public_path() . '/img/servicesPhoto', $filename);
            $services->services_image = $filename;
        }
        $services->save();
        return redirect(route('services.index'));
    }

    public function show(Services $service)
    {
        //
    }

    public function edit($id)
    {
        $services      = Services::find($id);
        $categ         = Categories::all();
        $service_Types = ['periodic_services'  => 'Periodic Services',
                          'denting_painting'   => 'Denting & Painting',
                          'batteries'          => 'Batteries',
                          'car_spa_cleaning'   => 'Car Spa & Cleaning',
                          'ac_service_repair'  => 'AC Service & Repair',
                          'tyres_wheel_care'   => 'Tyres & Wheel Care',
                          'windshields_lights' => 'Windshields & Lights',
                          'clutch_fitments'    => 'Clutch & Fitments',
        ];
        return view('admin.Services.add_service', compact('services', 'categ'))
            ->with('service_Types', $service_Types);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'name'        => 'required|max:255',
            'description' => 'required|max:255',
            'price'       => 'required|max:255',
        ]);

        $input['data']['name']          = $request->name;
        $input['data']['categories_id'] = $request->categories_id;
        $input['data']['description']   = $request->description;
        $input['data']['price']         = $request->price;
        $input['data']['type']          = $request->service_type;
        if ($request->hasFile('services_image'))
        {
            $file      = $request->file('services_image');
            $extention = $file->getClientOriginalExtension();
            $filename  = time() . '.' . $extention;
            $file->move(public_path() . '/img/servicesPhoto', $filename);
            $request->services_image         = $filename;
            $input['data']['services_image'] = $filename;
        }
        Services::whereId($id)->update($input['data']);
        return redirect(route('services.index'));
    }

    public function destroy($id)
    {
        $services = Services::findOrFail($id);
        $services->delete();
        return redirect(route('services.index'));
    }
}
