@extends('layouts.app')

@section('content')

<div class="row justify-content-center p-0 m-0">

        <div class="col-xl-8 col-lg-10 col-md-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img style="background-position: center;background-size: cover;" class="w-100" src="images/login.jpg" />
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Signup</h1>
                                </div>
                                <form  method="POST" action="{{ route('register') }}" class="user mt-2">
                                 @csrf
                                    <div class="form-group">
                                        <input   id="name" type="text"  name="name" class="form-control form-control-user  @error('name') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter your first name"  required autocomplete="name" autofocus>                                        
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input   id="name" type="text"  name="lastname" class="form-control form-control-user "  placeholder="Enter your Last name" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input   id="cnic" type="number"  name="cnic" class="form-control form-control-user" placeholder="Enter your CNIC"  autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input   id="pmdc" type="number"  name="pmdc" class="form-control form-control-user" placeholder="Enter your PMDC Number"  autofocus>
                                    </div>

                                    <div class="form-group">
                                        <input id="phone" type="number"  name="phone" class="form-control form-control-user  @error('phone') is-invalid @enderror" placeholder="Enter your Phone number"   required>                                        
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div style="display:none" class="form-group">
                                        <input id="role" value="Subscriber"  name="role" class="form-control form-control-user  @error('role') is-invalid @enderror" placeholder=""   required>                                        
                                        @error('role')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input  id="email" type="email"  name="email" class="form-control form-control-user  @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter your email"   required autocomplete="email" >                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter  Your Password"  name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input  id="password-confirm"  name="password_confirmation"  type="password" class="form-control" placeholder="Confirm  Your Password"  required autocomplete="new-password">                                        
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}    
                                    </button>
                                   
                                </form>
                                <hr>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <a class="small" href="/register">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



@endsection
