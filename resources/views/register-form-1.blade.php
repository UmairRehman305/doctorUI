@extends('layouts.app')
@section('register-form-1')
<style>



/* Hide all steps by default: */
.tab {
  display: none;
}

input.invalid {
    background-color: #ffdddd;
}
/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}
input{
    height:35px !important
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
contain{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background: linear-gradient(90deg,#189086,#2f8198);
background-image: linear-gradient(to bottom right,#02b3e4,#02ccba);	
}

.done{
	width:100px;
	height:100px;
	position:relative;
	left: 0;
	right: 0;
	top:-20px;
	margin:auto;
}
.contain h1{
	font-family: 'Julius Sans One', sans-serif;
	font-size:1.4em;
	color: #02b3e4;
}

.congrats{
	    /* position: relative; */
    /* left: 50%; */
    /* top: 50%; */
    /* max-width: 800px; */
    /* transform: translate(-50%,-50%); */
    /* width: 80%; */
    /* min-height: 300px; */
    /* max-height: 900px; */
    border: 2px solid white;
    /* border-radius: 5px; */
    /* box-shadow: 12px 15px 20px 0 rgb(46 61 73 / 30%); */
    background-image: linear-gradient(to bottom right,#02b3e4,#02ccba);
    background: #fff;
    text-align: center;
    font-size: 2em;
    color: #189086;
}

.text{
	position:relative;
	font-weight:normal;
	left:0;
	right:0;
	margin:auto;
	width:80%;
	max-width:800px;

	font-family: 'Lato', sans-serif;
	font-size:0.6em;

}


.circ{
    opacity: 0;
    stroke-dasharray: 130;
    stroke-dashoffset: 130;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    -ms-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}
.tick{
    stroke-dasharray: 50;
    stroke-dashoffset: 50;
    -webkit-transition: stroke-dashoffset 1s 0.5s ease-out;
    -moz-transition: stroke-dashoffset 1s 0.5s ease-out;
    -ms-transition: stroke-dashoffset 1s 0.5s ease-out;
    -o-transition: stroke-dashoffset 1s 0.5s ease-out;
    transition: stroke-dashoffset 1s 0.5s ease-out;
}
.drawn svg .path{
    opacity: 1;
    stroke-dashoffset: 0;
}

.regards{
	font-size:.7em;
}


@media (max-width:600px){
	.congrats h1{
		font-size:1.2em;
	}
	
	.done{
		top:-10px;
		width:80px;
		height:80px;
	}
	.text{
		font-size:0.5em;
	}
	.regards{
		font-size:0.6em;
	}
}

@media (max-width:500px){
	.congrats h1{
		font-size:1em;
	}
	
	.done{
		top:-10px;
		width:70px;
		height:70px;
	}
	
}

@media (max-width:410px){
	.congrats h1{
		font-size:1em;
	}
	
	.congrats .hide{
		display:none;
	}
	
	.congrats{
		width:100%;
	}
	
	.done{
		top:-10px;
		width:50px;
		height:50px;
	}
	.regards{
		font-size:0.55em;
	}
	
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card white-background ">
                <div class="card-header section-title white-background">
                    <h3 class="text-left blue-color">Profile</h3>
                </div>
                <div class="card-body">
                    
                <form id="regForm" action="/action_page.php">
                   
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                    <div class="section-title white-background">
                        <h3 style="font-size:22px" class="text-left blue-color">Personal Information</h3>
                    </div>
                        <div class="row">
                            <div class="col form-group">
                                <input style="width:100%" placeholder="Enter your full name" oninput="this.className = ''" name="name">
                            </div>
                            <div class="col form-group">
                                <input style="width:100%" type="email" placeholder="Qualification" oninput="this.className = ''" name="email">
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col form-group">
                                <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="Default select example">
                                    <option selected>Pakitan</option>
                                    <option value="1">India</option>
                                    <option value="2">Srilanka</option>
                                    <option value="3">Chine</option>
                                </select>
                            </div>
                            <div class="col form-group">
                                <input style="width:100%"  style="width:100%" oninput="this.className = ''"  type="number" name="name" class="form-control" id="name" placeholder="Country Id Number" required="">
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col form-group">
                                <input style="width:100%" oninput="this.className = ''"  type="number" name="name" class="form-control" id="name" placeholder="Medical Paractice License Number" required="">
                                
                            </div>
                            <div class="col form-group">
                                <input style="width:100%" oninput="this.className = ''"  type="name" name="name" class="form-control" id="name" placeholder="Institution/Clinic Name" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group">
                                <input style="width:100%" oninput="this.className = ''"  type="number" name="name" class="form-control" id="name" placeholder="Institution/ Clinic City" required="">
                                
                            </div>
                            <div class="col form-group">
                                <input style="width:100%"  oninput="this.className = ''"  type="name" name="name" class="form-control" id="name" placeholder="Specility Area" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col form-group">
                                <input style="width:100%"  oninput="this.className = ''"  type="number" name="name" class="form-control" id="name" placeholder="Intrest Area" required="">
                                
                            </div>
                            <div class="col form-group">
                                <input style="width:100%" oninput="this.className = ''"   type="number" name="name" class="form-control" id="name" placeholder="Phone Number" required="">
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col form-group">
                                <input style="width:100%"  oninput="this.className = ''"  type="" name="name" class="form-control" id="" placeholder="Email Address" required="">
                                
                            </div>
                            <div class="col form-group">
                                <input style="width:100%"  oninput="this.className = ''"  type="" name="name" class="form-control" id="" placeholder="Daite of Birth" required="">
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                    <div class="section-title white-background d-flex">
                        <h3 style="font-size:22px" class="text-left blue-color">Courses Information</h3>
                        <button class="custom-button ml-auto" onclick="cloneCoursesSection()">Add More Courses</button>
                    </div>
                        <div id="courses" class="mb-5">
                            <div  class="row">
                                <div class="col form-group">
                                    <input style="width:100%" placeholder="Course Title" oninput="this.className = ''" name="coursetitle">
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%" type="email" placeholder="Course Provider" oninput="this.className = ''" name="couseProvider">
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Format</option>
                                        <option value="online">Online</option>
                                        <option value="face to Face">Face to Face</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%"  style="width:100%" oninput="this.className = ''"  type="text" name="gratntProvider" class="form-control" id="name" placeholder="Grant Provider" required="">
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Content</option>
                                        <option value="sponsord">Sponsored</option>
                                        <option value="Independent">Independent</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Completed</option>
                                        <option value="sponsord">Participate</option>
                                        <option value="Independent">Speaker</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <input style="width:100%" oninput="this.className = ''"  type="date" name="date" class="form-control" id="name" placeholder="Month Year" required="">
                                    
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%"  oninput="this.className = ''"  type="number" name="name" class="form-control" id="creditHour" placeholder="Credit hour" required="">
                                </div>
                            </div>

                            <div class="row">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="tab">
                    <div class="section-title white-background d-flex">
                        <h3 style="font-size:22px" class="text-left blue-color">Counfrences Information</h3>
                        <button class="custom-button ml-auto" onclick="cloneConfrenceSection()">Add More Coufrences</button>
                    </div>
                        <div id="confrenceSection">
                            <div class="row">
                                <div class="col form-group">
                                    <input style="width:100%" placeholder="Confrence Title" oninput="this.className = ''" name="confrencetitle">
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%" type="email" placeholder="confence Provider" oninput="this.className = ''" name="confrenceProvider">
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Format</option>
                                        <option value="online">Online</option>
                                        <option value="face to Face">Face to Face</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%"  style="width:100%" oninput="this.className = ''"  type="text" name="confrencegratntProvider" class="form-control" id="name" placeholder="Grant Provider" required="">
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Content</option>
                                        <option value="sponsord">Sponsored</option>
                                        <option value="Independent">Independent</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Completed</option>
                                        <option value="sponsord">Participate</option>
                                        <option value="Independent">Speaker</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <input style="width:100%" oninput="this.className = ''"  type="date" name="date" class="form-control" id="name" placeholder="Month Year" required="">
                                    
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%"  oninput="this.className = ''"  type="number" name="name" class="form-control" id="creditHour" placeholder="Credit hour" required="">
                                </div>
                            </div>

                            <div class="row">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                    <div class="section-title white-background d-flex">
                        <h3 style="font-size:22px" class="text-left blue-color">Publication Information</h3>
                        <button class="custom-button ml-auto" onclick="clonepublicationSection()">Add More Publication</button>
                    </div>
                        <div id="publicationSection">
                            <div class="row">
                                <div class="col form-group">
                                    <input style="width:100%" placeholder="Publication Title" oninput="this.className = ''" name="publicationtitle">
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%" type="email" placeholder="Publication Provider" oninput="this.className = ''" name="publication">
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Format</option>
                                        <option value="online">Prnt</option>
                                        <option value="face to Face">Online</option>
                                    </select>
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%"  style="width:100%" oninput="this.className = ''"  type="text" name="publicationgratntProvider" class="form-control" id="name" placeholder="Grant Provider" required="">
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Content</option>
                                        <option value="sponsord">Sponsored</option>
                                        <option value="Independent">Independent</option>
                                        <option value="Independent">Dependent</option>

                                    </select>
                                </div>
                                <div class="col form-group">
                                    <select style="width:100%"  oninput="this.className = ''"  class="form-select" aria-label="">
                                        <option selected>Attended</option>
                                        <option value="sponsord">Participate</option>
                                        <option value="Independent">Speaker</option>
                                        <option value="Independent">Moderaator</option>
                                        <option value="Independent">Panelist</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col form-group">
                                    <input style="width:100%" oninput="this.className = ''"  type="date" name="date" class="form-control" id="name" placeholder="Month Year" required="">
                                    
                                </div>
                                <div class="col form-group">
                                    <input style="width:100%"  oninput="this.className = ''"  type="number" name="name" class="form-control" id="creditHour" placeholder="Credit hour" required="">
                                </div>
                            </div>

                            <div class="row">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Example file input</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            </div>
                        </div>
                    </div>

                    <div style="position:relative" class="tab">
                        <div class="contain">
                            <div class="congrats">
                                <h1 class="blue-color">Congrat<span class="hide">ulation</span>s !</h1>
                                <div class="done mt-5">
                                    <svg version="1.1" id="tick" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" xml:space="preserve">
                                    <path class="circ path" style="fill:#0cdcc7;stroke:#07a796;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" d="
                                        M30.5,6.5L30.5,6.5c6.6,6.6,6.6,17.4,0,24l0,0c-6.6,6.6-17.4,6.6-24,0l0,0c-6.6-6.6-6.6-17.4,0-24l0,0C13.1-0.2,23.9-0.2,30.5,6.5z"
                                        />
                                    <polyline class="tick path" style="fill:none;stroke:#fff;stroke-width:3;stroke-linejoin:round;stroke-miterlimit:10;" points="
                                        11.6,20 15.9,24.2 26.4,13.8 "/>
                                    </svg>
                                    </div>
                                <div class="text">
                                <p  class="blue-color">You have successfully fullfiled our requirements.
                                </p>
                                    </div>
                                <p class="regards blue-color">Click on publish button to publish your profile</p>
                            </div>
                        </div>
                       
                    </div>

                    <div style="overflow:auto;">
                        <div style="display:flex; justify-content:center">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="custom-button no-border">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)"  class="custom-button no-border">Next</button>
                        </div>
                    </div>
                    <!-- Circles which indicates the steps of the form: -->
                    <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Publish";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


// congratctulation div jquery
$(window).on("load",function(){
	
	setTimeout(function(){$('.done').addClass("drawn");},500)
	
});


// Clone Courses section
function cloneCoursesSection() {
    var itm = document.getElementById("courses");
    var cln = itm.cloneNode(true);
    document.getElementById("courses").append(cln);
    alert("Are you sure ? Do you want to want to add more courses?");
}
function cloneConfrenceSection() {
    var itm = document.getElementById("confrenceSection");
    var cln = itm.cloneNode(true);
    document.getElementById("confrenceSection").append(cln);
    alert("Are you sure ? Do you want to want to add more confrences?");
    
}

function clonepublicationSection() {
    var itm = document.getElementById("publicationSection");
    var cln = itm.cloneNode(true);
    document.getElementById("publicationSection").append(cln);
    // alert("Are you sure ? Do you want to want to add more Publications?");   
}





</script>

@endsection