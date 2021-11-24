<?php

namespace App\Http\Controllers;
use App\Course_info;
use App\Publication_info;
use App\Confrence_info;
use App\Personal_info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class searchProfileController extends Controller
{
    function search(Request $req){
        $userID =  Auth::id();
        $search = $req-> get('search');
        $personalDetails= DB::table('prsonal_info')-> where('userName' , 'like' , '%' .$search. '%')-> paginate(5);
        $courseDetails = course_info::  get();
        $publicationDetails = publication_info:: get();
        $confrenceDetails = confrence_info:: get();
        return view('pDoctorsProfile' , ['userID' => $userID ,'personalDetails' => $personalDetails ,'courseDetails' => $courseDetails , 'publicationDetails' => $publicationDetails , 'confrenceDetails' => $confrenceDetails]);

    }
}
