<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course_info;
use Illuminate\Support\Facades\Auth;


class InsertCoursController extends Controller
{
    function insert(Request $req) {
        
        $req-> cCertificateImage-> store ('images');
        $Course_info =  new Course_info;
        $Course_info ->  userID =  Auth::id();
        $Course_info-> ctitle = $req->cTitle;
        $Course_info-> cProvider = $req->cProvider;
        $Course_info-> cFormat = $req->cFormat;
        $Course_info-> cGrantProvider = $req->cGratntProvider;
        $Course_info-> cContent = $req->cContent;
        $Course_info-> cStatus = $req->cStatus;
        $Course_info-> cDate = $req->cCompletetionDate;
        $Course_info-> cCreditHour = $req->cCreditHour;
        $Course_info-> cCertificate = $req->cCertificateImage;
        
        $Course_info-> save();
        return redirect('/view-profile');
    }
    
    function delete($formID){
        $course = Course_info::select("*")->where("formID", "=", $formID)->delete();

        return redirect('/view-profile');
    }

    function edit($formID){
        return redirect('/view-profile');
    }
    
}
