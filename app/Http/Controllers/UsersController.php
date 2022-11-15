<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function  set()
    {
        // return Setting::find(1);
    }
    
    public function Dashboard()
    {
        $set = $this->set();
        $set['page'] = "User Dashboard";
        return view('users.index', compact('set'));
    }
}
