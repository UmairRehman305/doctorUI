<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Personal_info;
use App\Course_info;
use App\Confrence_info;
use App\Publication_info;
use Illuminate\Http\Request;

class userFormMiddlewareController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function router(){
        $b= 2;
        $personal = personal_info::where( 'userID' , Auth::id()) -> get();
        foreach ($personal as $a){
            $b = $a->userID;
            $c = $a->role;
        }

        if (Auth:: user() -> role == 'admin'){
            return redirect('dashboard'); 
        }
        else if ($b == Auth::id()){
            return redirect('view-profile'); 
        }
        else {
            return view('register-form-1'); 
        }

    }
}
