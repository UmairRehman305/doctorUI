@extends('layouts.app')
@section('register-form-1')

  <div style="background: #f6f9fe" class="pt-5 pb-5">
    <div class="container">
        <div class=" col-md-12">
            <div class="card position-relative" style="width: 100%;">
                <h4  style="background:#091538 ; color: white !important;  border-top-right-radius: 10px; border-top-left-radius: 20px; height:80px; padding-top:20px !important" class="pt-2 card-header text-center">Personal information</h4>
                    <div style="right:20px; top:-25px" class="position-absolute ">
                        @foreach($personalDetails as $personInfo)    
                            @if(Auth::user())
                                @if (Auth::user()->role == 'admin')
                                    @if ($personInfo->status == 1)
                                        <a style="color:white" class="icon-custom d-flex justify-content-center pt-5"  onclick="return confirm(`Do you want to Archive : {{$personInfo -> userName}} ?`)" 
                                        href={{"../../archive-profile/".$personInfo -> userID}}
                                        > 
                                        <i style="font-size:30px" class="bi bi-archive"></i>
                                        </a>
                                    
                                        
                                     @endif   
                                @endif
                            @endif
                        @endforeach
                    </div>

                <div style="right:80px; top:-25px" class="position-absolute">
                    @foreach($personalDetails as $personInfo)    
                        @if(Auth::user())
                            @if (Auth::user()->role == 'admin')
                                @if ($personInfo -> status == 0)    
                                    <a style="color:white" class="icon-custom d-flex justify-content-center pt-5"  onclick="return confirm(`Do you want to Publish : {{$personInfo -> userName}} ?`)" 
                                    href={{"../../publish-profile/".$personInfo -> userID}}
                                    > 
                                    <i style="font-size:30px" class="bi bi-check2-all"></i>
                                    </a>
                                @endif
                            @endif
                        @endif
                    @endforeach
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img style="display:flex; justify-content:center; margin:auto" src="/images/user.png " />
                            @foreach($personalDetails as $personInfo)
                                <h4 class="card-subtitle mb-2 mt-2 bcolor text-center">{{$personInfo -> userName}}</h4> 
                                <input type="hidden" id="formIDInput" type="text" value="{{$personInfo-> formID}}" />
                                
                                

                            @endforeach
                            @foreach($personalDetails as $personInfo)
                                @if($personInfo->userID == Auth::id())
                                    <button data-toggle="modal" onClick="getFormID()" data-target="#editPersonalInformation"  style="border-radius:20px; width:150px" class="custom-button d-flex m-auto justify-content-center mt-4">Edit</buttom>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-4">
                            <p class="label-c">Qualification</p>
                            <p class="label-c">Country</p>
                            <p class="label-c">Country ID</p>
                            <p class="label-c">Medical Practice Number</p>
                            <p class="label-c">Institute/Clinic Name</p>
                            <p class="label-c">Institute/City Name</p>
                            <p class="label-c">Specialty Area</p>
                            <p class="label-c">Interest Area</p>
                            <p class="label-c">Phone or Email</p>
                            <p class="label-c">Birthday</p>
                        </div>
                        @foreach($personalDetails as $personInfo)
                            <div class="col-md-4">
                                <p class="data">{{$personInfo -> qualification}}</p>
                                <p class="data">{{$personInfo -> country}}</p>
                                <p class="data">{{$personInfo -> countryIDNumber}}</p>
                                <p class="data">{{$personInfo -> medicalParacticeLicense_number}}</p>
                                <p class="data">{{$personInfo -> InstitueorClinicName}}</p>
                                <p class="data">{{$personInfo -> InstitutrOrCityName}}</p>
                                <p class="data">{{$personInfo -> spacialityArea}}</p>
                                <p class="data">{{$personInfo -> intrestArea}}</p>
                                <p class="data">{{$personInfo -> phoneOrEmail}}</p>
                                <?php 
                                    $DateFormat= $personInfo -> birthdate;
                                    $a = date("Y-m-d", strtotime($DateFormat));
                                ?>
                                <p class="data">{{$a}}</p>
                            </div>
                        @endforeach

                    </div>
                    
                </div>
            </div>
        </div>
    </div>

<div class="container mt-5">
<div class="card">
        <h4  style="background:#091538 ; color: white !important;  border-top-right-radius: 20px; border-top-left-radius: 20px; height:80px; padding-top:20px !important" 
        class="pt-2 card-header w-100">Courses Information 
        <a class="text-white" data-toggle="modal" data-target="#addCourseModal" href="#">
        @foreach($personalDetails as $personInfo)
            @if($personInfo->userID == Auth::id())
            <i style="position:absolute; right:20px ; top:25px" class="fa fa-plus" aria-hidden="true"></i>
            @endif 
        @endforeach
        </a>
    </h4>
  <div class="card-body">
        <div class="cad">
            <table  id="dtHorizontalExample" cellspacing="0"  class="table custom-table">
                <thead class="custom-table-head">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Title</th>
                        <th scope="col">Course Provider</th>
                        <!-- <th scope="col">Format</th> -->
                        <!-- <th scope="col">Grant Provider</th> -->
                        <th scope="col">Content</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Date</th> -->
                        <!-- <th scope="col">Credit Hour</th> -->
                        <th style="width:100px" scope="">Image Link</th>
                        <th scope="col">View</th>
                        @foreach($personalDetails as $personInfo)
                            @if($personInfo->userID == Auth::id())
                                <th scope="col">Delete</th>
                            @endif 
                        @endforeach
                    </tr>
                </thead>
                <tbody class="table-body-custom">
                <?php $i=1;?>
                @foreach($courseDetails as $course)
                <tr>
                    <td scope="col">{{$i++}}</td>
                    <td scope="col">{{$course -> cTitle}}</td>
                    <td scope="col">{{$course -> cProvider}}</td>
                    <!-- <td scope="col">{{$course -> cFormat}}</td> -->
                    <!-- <td scope="col">{{$course -> cGrantProvider}}</td> -->
                    <td scope="col">{{$course -> cContent}}</td>
                    <td scope="col">{{$course -> cStatus}}</td>
                    <!-- <td scope="col">{{$course -> cDate}}</td> -->
                    <!-- <td scope="col">{{$course -> cCreditHour}}</td> -->
                    <td scope="" style="width:100px">{{$course -> cCertificate}}</td>
                    <td scope="col"> 
                        <a class="d-flex justify-content-center" href="" id="editCompany" data-toggle="modal" data-target='#editCourseModal'><i style="color:#091538" class="fa fa-eye"></i></a>          
                    </td>
                    @foreach($personalDetails as $personInfo)
                        @if($personInfo->userID == Auth::id())
                            <td scope="col">
                                <a class="icon-custom" onclick="return confirm(`Do you want to delete PUBLICATION : {{$course -> cTitle}} ?`)" href={{"delete-course/".$course -> formID}}> <i class="fa fa-trash icon-custom"></i> </a>
                            </td>
                        @endif 
                    @endforeach
                </tr>

                @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>





<div class="container mt-5">
<div class="card">
<h4  style="background:#091538 ; color: white !important;  border-top-right-radius: 20px; border-top-left-radius: 20px; height:80px; padding-top:20px !important" class="pt-2 card-header">
    Publication Information
    <a class="text-white" data-toggle="modal" data-target="#addPublicationModal" href="#">
        @foreach($personalDetails as $personInfo)
            @if($personInfo->userID == Auth::id())
                <i style="position:absolute; right:20px ; top:25px" class="fa fa-plus" aria-hidden="true"></i>
            @endif 
        @endforeach
    </a>
</h4>

  <div class="card-body">
        <div class="cad">
            <table  id="dtHorizontalExample" cellspacing="0"  class="table custom-table">
                <thead class="custom-table-head">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Publication Title</th>
                        <th scope="col">Publication</th>
                        <!-- <th scope="col">Format</th> -->
                        <!-- <th scope="col">Grant Provider</th> -->
                        <th scope="col">Content</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Date</th> -->
                        <!-- <th scope="col">Credit Hour</th> -->
                        <th scope="col">Certificate</th>
                        <td scope="col"> View</td>
                        @foreach($personalDetails as $personInfo)
                            @if($personInfo->userID == Auth::id())
                                <td scope="col"> Delete</td>
                            @endif 
                        @endforeach

                    </tr>
                </thead>
                <tbody class="table-body-custom">
                <?php $i=1;?>
                    @foreach($publicationDetails as $publication)
                        <tr>
                            <td scope="col">{{$i++}}</td>
                            <td scope="col">{{$publication->pTitle}}</td>
                            <td scope="col">{{$publication->pPublication}}</td>
                            <!-- <td scope="col">{{$publication->pFormat}}</td> -->
                            <!-- <td scope="col">{{$publication->pGrantProvider}}</td> -->
                            <td scope="col">{{$publication->pContent}}</td>
                            <td scope="col">{{$publication->pStatus}}</td>
                            <!-- <td scope="col">{{$publication->pDate}}</td> -->
                            <!-- <td scope="col">{{$publication->pCreditHour}}</td> -->
                            <td scope="col">{{$publication->pCertificate}}</td>
                            <td scope="col"> <i style="color:#091538" class="fa fa-eye"></td>
                            @foreach($personalDetails as $personInfo)
                                @if($personInfo->userID == Auth::id())
                                    <td scope="col">
                                        <a class="icon-custom"  onclick="return confirm(`Do you want to delete PUBLICATION : {{$publication->pTitle}} ?`)"  href={{"delete-publication/".$publication -> formID}}> <i class="fa fa-trash icon-custom"></i> </a>
                                    </td>
                                @endif 
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<div class="container mt-5 mb-5">
<div class="card">
<h4  style="background:#091538 ; color: white !important;  border-top-right-radius: 20px; border-top-left-radius: 20px; height:80px; padding-top:20px !important" class="pt-2 card-header">
Conference Information
    <a class="text-white" data-toggle="modal" data-target="#addConfrenceModal" href="#">
    @foreach($personalDetails as $personInfo)
        @if($personInfo->userID == Auth::id())
            <i style="position:absolute; right:20px ; top:25px" class="fa fa-plus" aria-hidden="true"></i>
        @endif 
    @endforeach
        
    </a>
</h4>

  <div class="card-body">
        <div class="cad">
            <table  id="dtHorizontalExample" cellspacing="0"  class="table custom-table">
                <thead class="custom-table-head">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Conference Title</th>
                        <th scope="col"> Conference Provider</th>
                        <!-- <th scope="col">Format</th> -->
                        <!-- <th scope="col">Grant Provider</th> -->
                        <th scope="col">Content</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Date</th> -->
                        <!-- <th scope="col">Credit Hour</th> -->
                        <th scope="col">Certificate</th>
                        <th scope="col">View</th>
                        @foreach($personalDetails as $personInfo)
                            @if($personInfo->userID == Auth::id())
                                <th scope="col">Delete</th>
                            @endif 
                        @endforeach
                    </tr>
                </thead>
                <tbody class="table-body-custom">
                <?php $i=1;?>
                    @foreach($confrenceDetails as $confrence)
                        <tr>
                            <td scope="col">{{$i++}}</td>
                            <td scope="col">{{$confrence->cfTitle}}</td>
                            <td scope="col">{{$confrence->cfProvider}}</td>
                            <!-- <td scope="col">{{$confrence->cfFormat}}</td> -->
                            <!-- <td scope="col">{{$confrence->cfGrantForAttend}}</td> -->
                            <td scope="col">{{$confrence->cfContent}}</td>
                            <td scope="col">{{$confrence->cfStatus}}</td>
                            <!-- <td scope="col">{{$confrence->cfDate}}</td> -->
                            <!-- <td scope="col">{{$confrence->cfCreditHOur}}</td> -->
                            <td scope="col">{{$confrence->cfCertificate}}</td>
                            <td scope="col">  <i style="color:#091538" class="fa fa-eye"></td>
                            @foreach($personalDetails as $personInfo)
                                @if($personInfo->userID == Auth::id())
                                    <td scope="col">
                                    <a class="icon-custom" onclick="return confirm(`Do you want to delete CONFERENCE : {{$confrence->cfTitle}} ?`)" href={{"delete-confrence/".$confrence -> formID}}> <i class="fa fa-trash icon-custom"></i> </a>
                                    </td>
                                @endif 
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<!-- Edit Personal Information Modal -->
<div class="modal fade bd-example-modal-lg" id="editPersonalInformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <form  id="regForm" action="edit-personal-information" method="POST">
  @csrf
    <div class="modal-content">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Personal Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="col form-group">
                <input value="{{$personInfo -> userName}}" class="form-control" style="width:100%" type="text" placeholder="Enter your full name" name="name">
            </div>
            <div class="col form-group">
                <input value="{{$personInfo -> qualification}}" class="form-control" style="width:100%" type="name" placeholder="Qualification" name="qualification">
            </div>
            <div class="col form-group">
                <select  name="country" style="width:100%" class="form-select" aria-label="Default select example">
                    <option selected>{{$personInfo -> country}}</option>
                    <option value="4">Pakitan</option>
                    <option value="1">India</option>
                    <option value="2">Srilanka</option>
                    <option value="3">Chine</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> countryIDNumber}}"  style="width:100%"  type="number" name="countryID" class="form-control" placeholder="Country Id Number" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> medicalParacticeLicense_number}}" type="number" name="medicalLicenseNumber" class="form-control" placeholder="Medical Paractice License Number" required="">    
              
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> InstitueorClinicName}}" type="name" name="institutionOrClinicName" class="form-control" placeholder="Institution/Clinic Name" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> InstitutrOrCityName}}" type="name" name="instituteAndCityName" class="form-control" placeholder="Institution/ Clinic City" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> spacialityArea}}" type="name" name="specialityArea" class="form-control" placeholder="Specility Area" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> intrestArea}}" type="name" name="intrestArea" class="form-control" placeholder="Intrest Area" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> phoneOrEmail}}" type="name" name="email" class="form-control" placeholder="Email Address" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%" value="{{$personInfo -> birthdate}}" type="text" name="dateOfBirth" class="form-control" placeholder="Daite of Birth" required="">
            </div>
            <div class="col form-group">
                <label for="exampleFormControlFile1">Upload Profile Picture</label>
                <input value="{{$personInfo -> countryIDNumber}}" name="confrenceCertificateImage" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="custom-button" data-dismiss="modal">Close</button>
        <button type="submit" class="custom-button">Update</button>
      </div>
    </div>
    </form>
  </div>
</div>




<!-- Edit Course MOdal -->
    
<div class="modal fade bd-example-modal-lg" id="editCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <form  id="regForm" action="/insert-course" method="POST" enctype= "multipart/form-data">
  @csrf
    <div class="modal-content">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="exampleModalLongTitle">Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="col form-group">
                <input value="" class="form-control" style="width:100%" type="text" placeholder="Course Title " name="cTitle">
            </div>
            <div class="col form-group">
                <input class="form-control" style="width:100%" type="name" placeholder="Course Provider"name="cProvider">
            </div>
            <div class="col form-group">
                <select name="cFormat" style="width:100%" class="form-select" aria-label="">
                    <option selected>Format</option>
                    <option value="online">Prnt</option>
                    <option value="face to Face">Online</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%"  style="width:100%" type="text" name="cGratntProvider" class="form-control" placeholder="Grant Provider" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%"   type="number" name="cContent" class="form-control" placeholder="Medical Paractice License Number" required="">    
            </div>
            <div class="col form-group">
                <select name="cStatus" style="width:100%" class="form-select" aria-label="">
                    <option selected>Attended</option>
                    <option value="sponsord">Participate</option>
                    <option value="Independent">Speaker</option>
                    <option value="Independent">Moderaator</option>
                    <option value="Independent">Panelist</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%"  type="date" name="cCompletetionDate" class="form-control" placeholder="Month Year" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%"  type="number" name="cCreditHour" class="form-control" placeholder="Credit Hour" required="">
            </div>

            <div class="col form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input name="cCertificateImage" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
      </div>
      <div class="modal-footer">
          
        <button type="button" class="custom-button" data-dismiss="modal">Close</button>
        @foreach($personalDetails as $personInfo)
            @if($personInfo->userID == Auth::id())
            <button type="submit" class="custom-button">Update</button>
            @endif 
        @endforeach
        
      </div>
    </div>
    </form>
  </div>
</div>


    
<!-- add more course Modal -->
<div class="modal fade bd-example-modal-lg" id="addCourseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <form  id="regForm" action="../insert-course" method="POST" enctype= "multipart/form-data">
  @csrf
    <div class="modal-content">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
            <div class="col form-group">
                <input class="form-control" style="width:100%" type="text" placeholder="Course Title " name="cTitle" required="">
            </div>
            <div class="col form-group">
                <input class="form-control" style="width:100%" type="name" placeholder="Course Provider"name="cProvider" required="">
            </div>
            <div class="col form-group">
                <select name="cFormat" style="width:100%" class="form-select" aria-label="" required="">
                    <option selected>Format</option>
                    <option value="online">Prnt</option>
                    <option value="face to Face">Online</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%"  style="width:100%" type="text" name="cGratntProvider" class="form-control" placeholder="Grant Provider" required="">
            </div>
            <div class="col form-group">
                <select  name="cContent" style="width:100%" class="form-select" aria-label="" required="">
                    <option selected>Content</option>
                    <option value="Sponsord">Sponsord</option>
                    <option value="Independent">Independent</option>
                </select>
            </div>
            <div class="col form-group">
                <select name="cStatus" style="width:100%" class="form-select" aria-label="" required="">
                    <option selected>Status</option>
                    <option value="Completed">Completed</option>
                    <option value="Participated">Participated</option>
                    <option value="Speaker">Speaker</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%"  type="date" name="cCompletetionDate" class="form-control" placeholder="Month Year" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%"  type="number" name="cCreditHour" class="form-control" placeholder="Credit Hour" required="">
            </div>

            <div class="col form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input name="cCertificateImage" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="custom-button" data-dismiss="modal">Close</button>
        <button type="submit" class="custom-button">Add</button>
      </div>
    </div>
    </form>
  </div>
</div>




   
<!-- add more Publication Modal -->
<div class="modal fade bd-example-modal-lg" id="addPublicationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <form  id="regForm" action="../insert-publication" method="POST" enctype= "multipart/form-data">
  @csrf
    <div class="modal-content">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Publication</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="col form-group">
                <input style="width:100%" name="pTitle" placeholder="Publication Title"  class="form-control">
            </div>
            <div class="col form-group">
                <input style="width:100%" name="pProvider" class="form-control" placeholder="Publication Provider">
            </div>
            <div class="col form-group">
                <select name="pFormat" style="width:100%" class="form-select" aria-label="">
                    <option selected>Format</option>
                    <option value="online">Prnt</option>
                    <option value="face to Face">Online</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%"  style="width:100%" type="text" name="pGratntProvider" class="form-control" placeholder="Grant Provider" required="">
            </div>
            <div class="col form-group">
                <select name="pContent" style="width:100%" class="form-select" aria-label="">
                    <option selected>Content</option>
                    <option value="sponsord">sponsored</option>
                    <option value="Independent">Independent</option>
                    <option value="Independent">Dependent</option>
                </select>
            </div>
            <div class="col form-group">
                <select name="pStatus" style="width:100%" class="form-select" aria-label="">
                    <option selected>Attended</option>
                    <option value="sponsord">Participate</option>
                    <option value="Independent">Speaker</option>
                    <option value="Independent">Moderaator</option>
                    <option value="Independent">Panelist</option>
                    
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%"  type="date" name="pCompletetionDate" class="form-control" placeholder="Month Year" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%"  type="number" name="pCreditHour" class="form-control" placeholder="Credit hour" required="">
            </div>
            <div class="col form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input name="pCertificateImage" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="custom-button" data-dismiss="modal">Close</button>
        <button type="submit" class="custom-button">Add</button>
      </div>
    </div>
    </form>
  </div>
</div>

   
<!-- add more Confrence Modal -->
<div class="modal fade bd-example-modal-lg" id="addConfrenceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
  <form  id="regForm" action="../insert-confrence" method="POST" enctype= "multipart/form-data">
  @csrf
    <div class="modal-content">
      <div class="modal-header custom-modal">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Confrence</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="col form-group">
                <input style="width:100%" class="form-control" placeholder="Confrence Title" name="cfTitle">
            </div>
            <div class="col form-group">
                <input style="width:100%"  class="form-control" type="name" placeholder="confence Provider"  name="cfProvider">
            </div>
            <div class="col form-group">
                <select name="cfFormat" style="width:100%"  class="form-select" aria-label="">
                    <option selected>Format</option>
                    <option value="online">Online</option>
                    <option value="face to Face">Face to Face</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%" type="text" name="cfgrantForAttend" class="form-control" placeholder="Grant for Attend" required="">
            </div>
            <div class="col form-group">
                <select name="cfContent" style="width:100%" class="form-select" aria-label="">
                    <option selected>Content</option>
                    <option value="sponsord">sponsored</option>
                    <option value="Independent">Independent</option>
                </select>
            </div>
            <div class="col form-group">
                <select name="cfStatus" style="width:100%" class="form-select" aria-label="">
                    <option selected>Completed</option>
                    <option value="sponsord">Participate</option>
                    <option value="Independent">Speaker</option>
                </select>
            </div>
            <div class="col form-group">
                <input style="width:100%" type="date" name="cfCompleteDate" class="form-control" placeholder="Month Year" required="">
            </div>
            <div class="col form-group">
                <input style="width:100%"  type="number" name="cfCreditHour" class="form-control" id="creditHour" placeholder="Credit hour" required="">
            </div>
            <div class="col form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input name="cfCertificateImage" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="custom-button" data-dismiss="modal">Close</button>
        <button type="submit" class="custom-button">Add</button>
      </div>
    </div>
    </form>
  </div>
</div>







<!-- Course Delete Modal  -->
<!-- Modal -->
<div class="modal fade" id="courseDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="custom-button" data-dismiss="modal">Close</button>
        <button type="button" class="custom-button">Save changes</button>
      </div>
    </div>
  </div>
</div>
 

<script>
    $(document).ready(function () {
$('#dtHorizontalExample').DataTable({
"scrollX": true
});
$('.dataTables_length').addClass('bs-select');
});

function getFormID(){
    let formID = document.getElementById("formIDInput").value;
    console.log(formID);
    localStorage.setItem('formID', formID);
    }
</script>
@endsection
