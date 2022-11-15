<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\WhyChooseUs;


class FrontendController extends Controller
{
    public function  set()
    {
        // return Setting::find(1);
    }

    public function Index()
    {
        $set = $this->set();
        $set['page'] = "Home page";
        return view('frontend.index', compact('set'));
    }

    
}
