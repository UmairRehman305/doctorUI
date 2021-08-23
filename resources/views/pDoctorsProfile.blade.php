<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@include('header')
<div class="section-bg">
<div  style="padding-top:150px"  class="container">
    <div class="section-title">
        <h2>Featured</h2>
        <h3>Our Doctors <span>Profile</span></h3>
        <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
    </div>
</div>

<div style="display: flex;justify-content: flex-end;" class="container">
    <form class="w-100" action='/search' method='get'> 
        <div class='search-input'>
            <input class="text" type='text' name='search' class="form-control" placeholder="Search"  required="" >
            <button type="submit"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>

<div class="container">
    <div class="row">
    @foreach($personalDetails as $personInfo)
    
        <div class="card css-custom-card pt-3 pb-3 mb-5">
            <div class="card-body">
            @if(Auth::user())
                @if (Auth::user()->role == 'admin')
                <a class="icon-custom d-flex justify-content-end"  onclick="return confirm(`Do you want to Archive : {{$personInfo -> userName}} ?`)" 
                href={{"archive-profile/".$personInfo -> userID}}
                > 
                <i style="font-size:18px" class="bi bi-archive"></i>
                </a>
                @endif
            @endif

                <div class="col-md-12 row">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">    
                            <img class="profile-image rounded" src="images/profileImage.jpg" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="doctor-profile-image">
                            <h2 class="bcolor mt-3">{{$personInfo -> userName}}</h2>
                            <p>{{$personInfo -> qualification}}</p>
                            <div style="line-height:2.5" class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <label class="lebel">Country : <span class="bcolor font-weight-bold">{{$personInfo -> country}}</span></label>
                                    </div>
                                    <div class="row">
                                        <label>Country ID Number  : <span class="bcolor font-weight-bold">{{$personInfo -> countryIDNumber}}</span></label>
                                    </div>
                                    <div class="row">
                                        <label>Specialty Area : <span class="bcolor font-weight-bold">{{$personInfo -> spacialityArea}}</span></label>
                                    </div>                                        
                                    <div class="row">
                                            <label>Email  : <span class="bcolor font-weight-bold">{{$personInfo -> phoneOrEmail}}</span></label>
                                    </div>
                                    <div class="row">
                                        <?php 
                                            $DateFormat= $personInfo -> birthdate;
                                            $a = date("Y-m-d", strtotime($DateFormat));
                                        ?>
                                        <label>Birth Date : <span class="bcolor font-weight-bold">{{$a}}</span></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label>Medical Practice Number : <span class="bcolor font-weight-bold">{{$personInfo -> medicalParacticeLicense_number}}</span></label>
                                    </div>
                                    <div class="row">
                                        <label>Institute or Clinic Name : <span class="bcolor font-weight-bold">{{$personInfo -> InstitueorClinicName}}</span></label>
                                    </div>
                                    <div class="row">
                                        <label>Institute or City Name : <span class="bcolor font-weight-bold">{{$personInfo -> InstitutrOrCityName}}</span></label>
                                    </div>
                                    <div class="row">
                                        <label>Interest Area : <span class="bcolor font-weight-bold">{{$personInfo -> intrestArea}}</span></label>
                                    </div>
                                    
                                </div>
                                <div  style="display: flex;justify-content: flex-end;" class=" ">
                                    <a href="{{URL::to('detail-page/' .$personInfo -> userID)}}" style="height:40px ; padding: 0px 20px" class="custom-button " type="submit">
                                        View Profile
                                    </a>
                                </div>
                            </div>
                        
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        @endforeach



    </div>  

    <div style="display: flex;justify-content: flex-end;"  class="pb-5 pagination-links">
        {{$personalDetails -> links() }}
    </div>
</div>
</div>
@include('footer')
