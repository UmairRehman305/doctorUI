<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personal_info;
use App\Course_info;
use App\Confrence_info;
use App\Publication_info;

use Illuminate\Support\Facades\Auth;



class submitUserForm extends Controller
{
    function submit(Request $req){
        $personal_info =  new Personal_info;
        $personal_info -> userID =  Auth::id();
        $personal_info -> userName = $req -> name;
        $personal_info -> qualification = $req -> qualification; 
        $personal_info -> country = $req -> country; 
        $personal_info -> countryIDNumber = $req -> countryID; 
        $personal_info -> medicalParacticeLicense_number = $req -> medicalLicenseNumber; 
        $personal_info -> InstitueorClinicName = $req -> institutionOrClinicName; 
        $personal_info -> InstitutrOrCityName = $req -> instituteAndCityName; 
        $personal_info -> spacialityArea = $req -> specialityArea; 
        $personal_info -> intrestArea = $req -> intrestArea; 
        $personal_info -> phoneOrEmail = $req -> email; 
        $personal_info -> birthdate = $req -> dateOfBirth;
        $personal_info -> save();


        // $req-> courseCertificateImage-> store ('images');
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
        $Course_info-> cCertificate = $req->courseCertificateImage; 
        $Course_info-> save();


        // $req-> cfCertificateImage-> store ('images');
        $confrence_info =  new confrence_info;
        $confrence_info -> userID =  Auth::id();
        $confrence_info-> cfTitle = $req->cfTitle;
        $confrence_info-> cfProvider = $req-> cfProvider;
        $confrence_info-> cfFormat = $req->cfFormat;
        $confrence_info-> cfGrantForAttend = $req -> cfgrantForAttend;
        $confrence_info-> cfcontent = $req->cfContent;
        $confrence_info-> cfStatus = $req->cfStatus;
        $confrence_info-> cfDate = $req->cfCompleteDate;
        $confrence_info-> cfCreditHOur = $req->cfCreditHour;
        $confrence_info-> cfCertificate = $req->cfCertificateImage; 
        
        $confrence_info-> save();

        // $req-> pCertificateImage-> store ('images');
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



        return redirect('/fill-from');

        

    }
}
