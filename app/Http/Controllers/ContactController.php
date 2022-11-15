<?php
namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\Contact;
use App\Http\Controllers\AlertController;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function  set()
    {
        // return Setting::find(1);
    }

    public function ContactPage()
    {
        $set = $this->set();
        $set['page'] = "Contact page";
        return view('frontend.contact', compact('set'));
        // return $set;
    }

    public function ContactStore(Request $request)
    {
                // return $request;
        $ContactData = new Contact;
        $ContactData->fullName = $request->name;
        // if user is !reg 
        $ContactData->email = $request->email;
        $ContactData->subject = $request->subject;
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
