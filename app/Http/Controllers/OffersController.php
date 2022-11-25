<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{

    public function index()
    {
        // $offers = Offers::all();
        return view('admin.Offers.offers', compact('offers'));
    }

    public function create()
    {
        return view('admin.Offers.add_offer');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
