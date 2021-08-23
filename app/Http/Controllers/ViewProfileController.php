<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Course_info;
use App\Publication_info;
use App\Confrence_info;
use App\Personal_info;



class ViewProfileController extends Controller
{
    
    function index() {
        $b= 2;
        $personal = personal_info::where( 'userID' , Auth::id()) -> get();
        foreach ($personal as $a){
            $b = $a->userID;
        }
        if( $b == Auth::id() ){        
            $userID =  Auth::id();
            $personalDetails = personal_Info :: where('userID', $userID) -> get() ;
            // $courseDetails = course_info::all();
            $courseDetails = course_info::where( 'userID' , $userID) -> get();

            $publicationDetails = publication_info:: where('userID' , $userID)-> get();
            $confrenceDetails = confrence_info::where ('userID', $userID) ->get();

            
            return view('viewProfile' , ['userID' => $userID ,'personalDetails' => $personalDetails ,'courseDetails' => $courseDetails , 'publicationDetails' => $publicationDetails , 'confrenceDetails' => $confrenceDetails]);
        }
        else {
            return redirect ('/fill-from');

        }

    }
    function detail($userID) {
        $b= 2;
        $personal = personal_info::where( 'userID' , $userID) -> get();
    
        $personalDetails = personal_Info :: where('userID', $userID) -> get() ;
        // $courseDetails = course_info::all();
        $courseDetails = course_info::where( 'userID' , $userID) -> get();

        $publicationDetails = publication_info:: where('userID' , $userID)-> get();
        $confrenceDetails = confrence_info::where ('userID', $userID) ->get();

        
        return view('viewProfile' , ['userID' => $userID ,'personalDetails' => $personalDetails ,'courseDetails' => $courseDetails , 'publicationDetails' => $publicationDetails , 'confrenceDetails' => $confrenceDetails]);
        
    }
}
