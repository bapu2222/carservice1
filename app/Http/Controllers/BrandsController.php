<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\CarModels;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brands::all();
        return view('admin.car.brands.index', compact('brands'));
    }

    public function create()
    {
        $models = CarModels::all()->pluck('id', 'name');
        return view('admin.car.brands.add_brand', compact('models'))->with('editMode', 'off');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'car_models' => 'required',
        ]);

        $brand = new Brands();
        $brand->name = $request->input('name');
        $brand->save();

        $newModels = [];

        foreach (request('car_models') as $key => $value) {
            if (is_numeric($value)) {
                $q = CarModels::whereId($value)->first();
                if ($q != null) {
                    $newModels[] = $q->name;
                    $q->delete();
                }
            } else {
                $newModels[] = $value;
            }
        }

        foreach ($newModels as $value) {

            $model = new CarModels();
            $model->name = $value;
            $model->brand_id = $brand->id;
            $model->save();
        }
        return redirect(route('brand.index'));
    }

    public function show(Brands $brands)
    {

    }

    public function edit($id)
    {
        $brand = Brands::find($id);
        $modelName = [];
        foreach ($brand->models as $value) {
            $modelName[] = $value->id;
        }
        $models = CarModels::all()->pluck('id', 'name');
        return view('admin.car.brands.add_brand', compact('brand', 'models'))->with('editMode', 'on')
            ->with('modelName', json_encode($modelName));
    }

    public function update($id, Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'car_models' => 'required',
        ]);

        $brand = Brands::whereId($id)->first();
        $brand->name = request('name');
        $brand->save();
        $newModels = [];
        foreach (request('car_models') as $key => $value) {
            if (is_numeric($value)) {
                $q = CarModels::whereId($value)->first();
                if ($q != null) {
                    $newModels[] = $q->name;
                    $q->delete();
                }
            } else {
                $newModels[] = $value;
            }
        }

        CarModels::whereBrandId($brand->id)->delete();
        foreach ($newModels as $value) {

            $model = new CarModels();
            $model->name = $value;
            $model->brand_id = $brand->id;
            $model->save();
        }
        return redirect(route('brand.index'));
    }

    public function destroy($id)
    {
        Brands::whereId($id)->delete();
        return redirect(route('brand.index'));
    }
}
