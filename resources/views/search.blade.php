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
    <form action='/search' method='get'> 
        <div class='search-input'>
            <input class="text" type='text' name='search' class="form-control" placeholder="Search"  required="" >
            <button type="submit"><i class="bi bi-search"></i></button>
        </div>
    </form>
</div>

<div class="container">
    <div class="row">
    @foreach($posts as $p)
    
        <div class="card css-custom-card pt-3 pb-3 mb-5">
            <div class="card-body">
                <div class="col-md-12 row">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">    
                            <img class="profile-image rounded" src="images/profileImage.jpg" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="doctor-profile-image">

                        
                            <h2 class="bcolor mt-3">{{$p -> userName}}</h2>
                            <p>{{$p -> qualification}}</p>
                        
                        </div> 
                        
                      
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    <div style="display: flex;justify-content: flex-end;"  class="pb-5 pagination-links">
        {{$posts -> links() }}
    </div>

</div>
</div>
@include('footer')
