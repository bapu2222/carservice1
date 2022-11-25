<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{

    public function index()
    {
        $categories = Categories::all();

        return view('admin.Categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.Categories.add_category');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        $category = new Categories();
        $category->name = $request->input('name');
        if ($request->hasFile('categories_image')) {
            $file = $request->file('categories_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path() . '/img/categoriesPhoto', $filename);
            $category->categories_image = $filename;
        }
        $category->save();
//         session('true');
        return redirect(route('categories.index'));
    }

    public function show(Categories $categoery)
    {
        //
    }

    public function edit($id, Categories $categoery)
    {
        $categories = Categories::find($id);
        return view('admin.Categories.add_category', compact('categories'));
    }

    public function update($id, Request $request, Categories $categoery)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
        $input['data']['name'] = $request->name;
        if ($request->hasFile('categories_image')) {
            $file = $request->file('categories_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move(public_path() . '/img/categoriesPhoto', $filename);
            $request->categories_image = $filename;
            $input['data']['categories_image'] = $filename;
        }
        Categories::whereId($id)->update($input['data']);
        return redirect(route('categories.index'));
    }

    public function destroy($id)
    {
        $categories = Categories::findOrFail($id);
        $categories->delete();
        return redirect(route('categories.index'));
    }
}
