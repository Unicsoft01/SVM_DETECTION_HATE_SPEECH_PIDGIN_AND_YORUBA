<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PidginLibController extends Controller
{
    static function library()
    {
        $hate_words =
        ["comot","that one","wahala","get head","u no","you no","kill you", "mumu", "idiot", "no get sense", "no get shame", "animal","mad","craze","fake","ashawo","shame","anything","fuck", "goat", "collect", "bastard", "swear", "no get", "agboro", "agbero", "wahalla too much","get out","werey","kolo","ment","amebo","maga","yab","commot","smelling","smell","no born you","bad-belle","dem send you","lame","your mother","your fada","your papa","wan collet","disturb me","disturb person","alonga","no born you well","dem no born you","wipe you","wipe me","wipe am","bad mouth","bad man","bad boy","no correct","no corret","big head","big eye","toto","chop winch","winch","nack","knack","no good","joncing","jonce","wor wor","disembark","wotowoto","woto woto","sapa","red for you","red for am","your own don finish","crase","a whole","don suffer","don suffer","rubbish","mess","kata kata","para give","para for","give para","fuck up","fall my","fall hand","fall my hand","wetin de do","wetin d work","wetin de worry","woz me","wozz am","woz them","woz","rapka rapka","crow crow","jones","mess up","log out","bolo","malu","mollu","molu","akparoro","giraffe","zombie","agaracha","Dat one na grammar","non sense","quench you","quench your fire","quench","too get big","bad-belle","unto which", "Unto wetin"," done join","Tu tu nii","drill am","drilling","drill am","drill","juju no","for you oo","na you sabi","sabi","waka","who do you","shege","juju","de worry","stupid","hate"
        ];
        return $hate_words;
    }
}
