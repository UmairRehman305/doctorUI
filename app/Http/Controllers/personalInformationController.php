<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Personal_info;
use Illuminate\Support\Facades\DB;

class personalInformationController extends Controller
{

    function update(Request $req){
        // $a = "<script>document.write(localStorage.getItem('formID'))</script>";
        $b = 88;
        $personal_info =  new Personal_info;
        $personal_info = Personal_info::find(Auth::id());   
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
  
        return redirect('/view-profile');
    }
}
