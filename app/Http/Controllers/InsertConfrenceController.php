<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Confrence_info;

class InsertConfrenceController extends Controller
{
    function insert(Request $req) {
        
        $req-> cfCertificateImage-> store ('images');
        $confrence_info =  new confrence_info;
        $confrence_info -> userID =  Auth::id();
        $confrence_info-> cfTitle = $req->cfTitle;
        $confrence_info-> cfProvider = $req-> cfProvider;
        $confrence_info-> cfFormat = $req->cfFormat;
        $confrence_info-> cfGrantForAttend = $req->cfgrantForAttend;
        $confrence_info-> cfcontent = $req->cfContent;
        $confrence_info-> cfStatus = $req->cfStatus;
        $confrence_info-> cfDate = $req->cfCompleteDate;
        $confrence_info-> cfCreditHOur = $req->cfCreditHour;
        $confrence_info-> cfCertificate = $req->cfCertificateImage; 
        
        $confrence_info-> save();
        return redirect('/view-profile');
    } 
    function delete($formID){
        $course = Confrence_info::select("*")->where("formID", "=", $formID)->delete();
        return redirect('/view-profile');
    }
}
