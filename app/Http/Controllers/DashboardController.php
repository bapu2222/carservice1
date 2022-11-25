<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CarModels;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $appointment           = new Book();
        $all_appointment       = $appointment->all()->count();
        $accepted_appointment  = $appointment->whereAccept(1)->count();
        $rejected_appointment  = $appointment->whereReject(1)->count();
        $completed_appointment = $appointment->whereCompleted(1)->count();
        return view('admin.dashboard.index', compact('all_appointment', 'accepted_appointment', 'rejected_appointment', 'completed_appointment'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(CarModels $carModels)
    {
        //
    }

    public function edit(CarModels $carModels)
    {
        //
    }

    public function update(Request $request, CarModels $carModels)
    {
        //
    }

    public function destroy(CarModels $carModels)
    {
        //
    }
}
