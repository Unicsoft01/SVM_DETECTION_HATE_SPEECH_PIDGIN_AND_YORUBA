<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Yoruba;
use Illuminate\Support\Str;
use App\Http\Controllers\Yoruba_LibController;
use App\Http\Controllers\PidginLibController;


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

    public function pidgin()
    {
        $set = $this->set();
        $set['page'] = "this page na pidgin english page!";
        return view('frontend.pidgin', compact('set'));
    }

    public function yoruba()
    {
        $set = $this->set();
        $set['page'] = "Yoruba page";
        return view('frontend.Yoruba', compact('set'));
    }

    public function recent_hate()
    {
        $set = $this->set();
        $set['page'] = "Yourba page";
        return view('frontend.recent', compact('set'));
    }

    public function yoruba_process(Request $request)
    {
        $hate_words = Yoruba_LibController::library();

        if (Str::contains($request->text, $hate_words))
       {
           // return "Your text is a hate speech because it contains hate words!";
            return back()->with('error','Your inputs contains hate word(s)');
       }
       else
       {
            return back()->with('success','Your inputs are free of hate words!');
        // return "Clean texts";
       }
    }





// DB::table('users')
// ->where('id', $user->id)
// ->update(['active' => true]);

    public function pidgin_process(Request $request)
    {
        // proceed if input is like pidgin
        // if (Verify_pidgin::pidgin_accuracy($request->text))
        // {
           $hate_words = PidginLibController::library();

            if (Str::contains(Str::lower($request->text), $hate_words))
            {
                // return "Your text is a hate speech because it contains hate words!";
                return back()->with('error','Your inputs contains hate word(s)');
            }
            else
            {
                return back()->with('success','Your inputs are free of hate words!');
            // return "Clean texts";
            }
          
            // return $request;
        // }
        // else
        // {
        //             return back()->with('warning','Warning: Only pidgin words are filtered!');
        //     // echo "die it";
        // }



    }



    
}

// $text = "jdkddehd"
// $regex = '/AWe/i';
// for ($i=0; $i < $hate_words; $i++)
// { 
//      $regex = "/$hate_words[$i]/i";
//     $occurance = Verify_pidgin::isHate($request->text, $regex);

//     if(count($occurance) > 0)
//     {
//         foreach($occurance as $occur)
//         {
//             echo $occur;
//         }
//     }
// }

//  $c1 = [
//      "idiot",
//      "mumu",
//      "big head",
//      "fool"
//  ];

// if (Str::contains($request, $c1)) {
//     return "Your text is a hate speech because it contains";
// }
//  // return $request;