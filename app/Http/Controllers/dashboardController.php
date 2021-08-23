<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Course_info;
use App\Publication_info;
use App\Confrence_info;
use App\Personal_info;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    function get(){

        $doctors = Personal_info :: get();
        $doctorCount = count($doctors);

        $publications = Publication_info :: get();
        $publicationsCount = count($publications);

        $confrences = Confrence_info :: get();
        $confrencesCount = count($confrences);

        $courseDetails = Course_info :: get();
        $courseCount = count($courseDetails);
        return view(
            'dashboard' , 
            ['courseCount' => $courseCount , 
            'confrencesCount' => $confrencesCount , 
            'doctorCount' => $doctorCount, 
            'publicationsCount' => $publicationsCount]
        );
    }

    function archive($userID){

        DB::update('update prsonal_info set status = ? where userID = ?',['0',$userID]);
        return redirect()->back(); 

    }
}
