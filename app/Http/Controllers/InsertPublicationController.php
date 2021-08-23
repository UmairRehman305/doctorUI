<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Publication_info;


class InsertPublicationController extends Controller
{
    function insert(Request $req) {
        
        $req-> pCertificateImage-> store ('images');
        $publication_info =  new publication_info;
        $publication_info -> userID =  Auth::id();
        $publication_info-> pTitle = $req->pTitle;
        $publication_info-> pPublication = $req->pProvider;
        $publication_info-> pFormat = $req->pFormat;
        $publication_info-> pGrantProvider = $req->pGratntProvider;
        $publication_info-> pContent = $req->pContent;
        $publication_info-> pStatus = $req->pStatus;
        $publication_info-> pDate = $req->pCompletetionDate;
        $publication_info-> pCreditHour = $req->pCreditHour;
        $publication_info-> pCertificate = $req->pCertificateImage; 
        
        $publication_info-> save();
        return redirect('/view-profile');

    
    }
    
    function delete($formID){
        $course = Publication_info::select("*")->where("formID", "=", $formID)->delete();

        return redirect('/view-profile');
    }
    
}
