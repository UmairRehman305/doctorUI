<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Course_info;
use App\Publication_info;
use App\Confrence_info;
use App\Personal_info;

class doctorProfileCotroller extends Controller
{
    function getProfile() {
        $userID =  Auth::id();
        $personalDetails = personal_Info :: orderBy('userID', 'DESC')-> where('status',1) -> paginate(5);
        $courseDetails = course_info::  get();
        $publicationDetails = publication_info:: get();
        $confrenceDetails = confrence_info:: get();
    
        return view('pDoctorsProfile' , ['userID' => $userID ,'personalDetails' => $personalDetails ,'courseDetails' => $courseDetails , 'publicationDetails' => $publicationDetails , 'confrenceDetails' => $confrenceDetails]);

    }
}
