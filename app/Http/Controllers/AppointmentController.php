<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{

    public function index()
    {
        $appointments = Book::with('user', 'brands', 'models')->get();
        return view('admin.appointment.all_appointment', compact('appointments'));
    }

    public function acceptAppointment()
    {
        $appointments = Book::with('user', 'brands', 'models')->where('accept', '=', 1)->get();
        return view('admin.appointment.accepted_appointment', compact('appointments'));
    }

    public function completedAppointment()
    {
        $appointments = Book::with('user', 'brands', 'models')->where('completed', '=', 1)->get();
        return view('admin.appointment.completed_appointment', compact('appointments'));
    }

    public function rejectedAppointment()
    {
        $appointments = Book::with('user','brands','models')->where('reject','=',1)->get();
        return view('admin.appointment.rejected_appointment',compact('appointments'));
    }

    public function changeStatus(Request $request)
    {
        $id = $request->id;
        $appointment = Book::with('user', 'models', 'brands')->whereId($id)->first();
        $status = $request->status;
        if ($status == 'reject') {
            $appointment->reject = 1;
            $appointment->accept = 0;
            $appointment->completed = 0;
            $appointment->save();
            Mail::send('emails.template.rejected_appointment_mail', ['appointment' => $appointment], function ($message) {
                $message->to(auth()->user()->email, 'mail send online')
                    ->subject('Appointment Rejected');
            });
        } else if ($status == 'accept') {
            $appointment->accept = 1;
            $appointment->reject = 0;
            $appointment->completed = 0;
            $appointment->save();
            Mail::send('emails.template.accepted_appointment_mail', ['appointment' => $appointment], function ($message) {
                $message->to(auth()->user()->email, 'mail send online')
                    ->subject('Appointment Accepted');
            });
        } else if ($status == 'completed') {
            $appointment->completed = 1;
            $appointment->accept = 0;
            $appointment->reject = 0;
            $appointment->save();
            Mail::send('emails.template.completed_appointment_mail', ['appointment' => $appointment], function ($message) {
                $message->to(auth()->user()->email, 'mail send online')
                    ->subject('Ready TO deliver');
            });
        }
        return response()->json(['status' => 'success', 'message' => 'Status Update Successfully :)']);
    }

    public function appointmentIdView($id)
    {
        $appointment = Book::with('user', 'brands', 'models')->whereId(request('id'))->first();
        $total = 0 ;
        if (isset($appointment->service_price))
            $total = array_sum(json_decode($appointment->service_price));

        return view('admin.appointment.view_id_appointment')

            ->with('total', $total)
            ->with('appointment', $appointment);
    }

    public function appointmentNote(Request $request)
    {
        $id = $request->id;
        $bill = Book::findOrNew($id);



        $sname=$request->name;
        $sprice=$request->price;
        array_push($sname,"Service Charge");
        array_push($sprice,100);

        $input['data']['service_name'] =json_encode($sname);
        $input['data']['service_price'] =json_encode($sprice);
        $input['data']['service_custom_message'] =$request->message;
        $bill->fill($input['data'])->save();
        $appointment = Book::with('user', 'models', 'brands')->whereId($id)->first();

        $total = array_sum(json_decode($appointment->service_price));
        Mail::send('emails.template.accept_note', ['total' => $total,'name'=>$sname,'price'=>$sprice,'appointment' => $appointment], function ($message) {
            $message->to(auth()->user()->email, 'mail send online')
                ->subject('Accept ');
        });
        

        return redirect()->back()->with('success', 'Service Send Successfully');
    }
}
