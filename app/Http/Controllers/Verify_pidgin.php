<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Verify_pidgin extends Controller
{
    static function pidgin_accuracy($request)
    {
        $pidPhrase = [
            "na",
            "im",
            "de",
            "dey",
            "how de",
            "who be",
            "put am",
            "abeg",
            "comot",
            "na me",
            "mumu",
            "na wa oo",
            "idiot",
            "that one",
            "make you",
            "reason any matter",
            "comfirm the levels",
            "the waka",
            "collect am",
            "wahala",
            "oyo",
            "get head",
            "shebi",
            "self",
            "no balance",
            "say",
            "jare",
            "sha",
            "u no",
            "wahalla",
            "sabi",
            "you be"
        ];

        // $subject = "how your mumu  boy";
        for ($i=0; $i <count($pidPhrase); $i++)
        { 
            // echo $pidPhrase[$i];
            if (preg_match("/$pidPhrase[$i]/i", $request) )
            {
                return true;
            }
        }
    }

    static function isHate($text, $regex)
    {
        preg_match_all($regex, $text, $array);
        return $array[0];
    }
}

// $text = "jdkddehd"
// $regex = '/AWe/i';

// $prodnum = getpartsWithRegEx($text, $regex);

// if(count($prodnum) > 0){
// foreach($prodnums as $ prodnum){
// echo $prodnum;
// }

// $getpartsW($text, $regex)
// {
//     preg_match_all($regex, $text, $array);
//     return $array[0];
// }