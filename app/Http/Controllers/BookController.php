<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Brands;
use App\Models\CarModels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{

    public function index()
    {
        $brands = Brands::all();
        return view('user.appointment_book.index', compact('brands'));
    }

    public function create(Request $request)
    {

        dd($request->all());
    }

    public function store(Request $request)
    {
        if (auth()->user())
        {
            $appointment                   = new Book();
            $appointment->user_id          = auth()->user()->id;
            $appointment->appointment_type = null;
            $appointment->brand            = $request->brand;
            $appointment->model            = $request->model;
            $appointment->kilometers       = $request->kilometers;
            $appointment->car_number       = $request->car_number;
            $appointment->appointment_date = $request->appointment_date;
            $appointment->appointment_time = $request->appointment_time;
            $appointment->save();
            $appointments = $appointment::with('user', 'brands', 'models')->where('id', $appointment->id)->get();

            Mail::send('emails.template.mail', ['appointment' => $appointments], function ($message) {
                $message->to(auth()->user()->email, 'mail send online')
                    ->subject('Appointment Submitted');
            });
            return redirect('/');
        }
        else
        {
            return redirect('/');
        }

    }

    public function show(Book $book)
    {
        //
    }

    public function edit(Book $book)
    {
        //
    }

    public function update(Request $request, Book $book)
    {
        //
    }

    public function destroy(Book $book)
    {
        //
    }

    public function getModel(Request $request)
    {
        $models = CarModels::whereBrandId($request->id)->get();
        $html   = '<option value="">Select Model</option>';
        foreach ($models as $model)
        {
            $html .= '<option value="' . $model->id . '">' . $model->name . '</option>';
        }
        return response()->json(['html' => $html]);
    }
}
