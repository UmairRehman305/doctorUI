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
   
</div>


@include('footer')
