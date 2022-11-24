<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointments;
use Illuminate\Support\Str;

     
class AppointmentController extends Controller
{
    public function  set()
    {
        // return Setting::find(1);
    }

    // public function BookAppointment()
    // {
    //     // $set = $this->set();
    //     $set['page'] = "Book an Appointment";
    //     // return view('frontend.appointment', compact('set'));
    //     return $set;
    // }

    public function BookAppointment()
    {
        $c1 = [
            "idiot",
            "mumu",
            "big head",
            "fool"
        ];
       $text = "hello how are you big head";
       // $out = Str::contains($text, $c1);
       // return $out;
       if (Str::contains($text, $c1)) {
           return "Your text is a hate speech because it contains $c1[]";
       }
    }

    public function StoreAppointments(Request $request)
    {
                // return $request;
        $ContactData = new Appointments;
        $ContactData->name = $request->name;
        $ContactData->email = $request->email;
        $ContactData->phone = $request->phone;
        $ContactData->date = $request->date;
        $ContactData->services = $request->services;
        $ContactData->priority = $request->priority;

        $ContactData->message = $request->message;
        // show success after save()
        if ($ContactData->save()) {
            return back()->with(AlertController::SendAlert());
        }
        else
        {
            back()->with(AlertController::SendAlert('error', 'An error occurred!'));
        }
    }



}


