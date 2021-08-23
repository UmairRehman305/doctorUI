@include('header')

<div style="margin-top:50px;">
    <p style="color:white">as</p>
</div>

<div style="background:#f6f9fe !important" class="pt-5 pb-5">

    <div class="container">
        <div class="row">
            <div class="section-title">
            <h2>Admin</h2>
            <h3>Dashboard </h3>
        </div>
            <div class="col-md-3 pt-1">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                        <i class="fa fa-id-badge widget-icon"></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0 bcolor font-web" title="Number of profile">Doctors Profiles</h5>
                        <h3 class="mt-3 mb-3 bcolor font-web">{{$doctorCount}}</h3>
                        <!-- <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="bx bx-user"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>  
                        </p> -->
                    </div> <!-- end card-body-->
                </div>
            </div>

            <div class="col-md-3 pt-1">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                        <i class="fa fa-id-badge widget-icon "></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0 bcolor font-web" title="Number of profile">Publications</h5>
                        <h3 class="mt-3 mb-3 bcolor font-web">{{$publicationsCount}}</h3>
                        <!-- <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="bx bx-user"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>  
                        </p> -->
                    </div> <!-- end card-body-->
                </div>
            </div>

            <div class="col-md-3 pt-1">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                        <i class="fa fa-users widget-icon "></i>
                        <!-- <i class="fa fa-id-badge widget-icon pt-1"></i> -->
                        </div>
                        <h5 class="text-muted fw-normal mt-0 bcolor font-web" title="Number of profile">Conferences</h5>
                        <h3 class="mt-3 mb-3 bcolor font-web">{{$confrencesCount}}</h3>
                        <!-- <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="bx bx-user"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>  
                        </p> -->
                    </div> <!-- end card-body-->
                </div>
            </div>

            <div class="col-md-3 pt-1">
                <div class="card widget-flat">
                    <div class="card-body">
                        <div class="float-end">
                        <i class="fa fa-id-badge widget-icon "></i>
                        </div>
                        <h5 class="text-muted fw-normal mt-0 bcolor font-web" title="Number of profile">Courses</h5>
                        <h3 class="mt-3 mb-3 bcolor font-web">{{$courseCount}}</h3>
                        <!-- <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="bx bx-user"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>  
                        </p> -->
                    </div> <!-- end card-body-->
                </div>
            </div>
        </div>    
    </div>



    <div class="container mt-5">
    
    <div class="row">
        <div class="section-title">
        <h2>Archive Profiles</h2>
        <h3>Profiles</h3>
    </div>

</div>



<div class="card mb-5">
        <h4  style="background:#091538 ; color: white !important;  border-top-right-radius: 20px; border-top-left-radius: 20px; height:80px; padding-top:20px !important" 
        class="pt-2 card-header w-100"> Profiles
        <!-- <a class="text-white" data-toggle="modal" data-target="#addCourseModal" href="#">
            <i style="position:absolute; right:20px ; top:25px" class="fa fa-plus" aria-hidden="true"></i>
        </a> -->
    </h4>
  <div class="card-body">
        <div class="ca">
            <table  id="dtHorizontalExample" cellspacing="0"  class="table custom-table">
                <thead class="custom-table-head">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Qualification</th>
                        <th scope="col">Country</th>
                        <th scope="col">Institute</th>
                        <th style="width:100px" scope="">Phone/Email</th>
                        <th scope="col">View Profile</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody class="table-body-custom">
                <?php $i=1;?>
                <tr>
                @foreach($personalDetails as $personInfo)
                    <td scope="col">{{$i++}}</td>
                    <td scope="col">{{$personInfo -> userName}}</td>
                    <td scope="col">{{$personInfo -> qualification}}</td>
                    <td scope="col">{{$personInfo -> country}}</td>
                    <td scope="col">{{$personInfo -> InstitueorClinicName}}</td>
                    <td scope="" style="width:100px">{{$personInfo -> phoneOrEmail}}</td>
                    <td scope="col"> 
                        <a class="d-flex justify-content-center" href="{{URL::to('detail-page/' .$personInfo -> userID)}}" ><i style="color:#091538" class="fa fa-eye pt-2"></i></a>          
                    </td>
                    <td scope="col">Archive</td>
                </tr>
                @endforeach
                
                </tbody>
                
            </table>
            <div style="display: flex;justify-content: flex-end;"  class="pb-5 pagination-links">
                {{$personalDetails -> links() }}
            </div>
        </div>
    </div>
</div>






</div>







@include('footer')
