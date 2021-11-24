@extends('layouts.app')

@section('content')

    <div style="background:#f6f9fe" class="row justify-content-center p-0 m-0">

        <div class="col-xl-8 col-lg-10 col-md-8 d-flex justify-content-center">

            <div  class="login-card card o-hidden border-0 shadow-lg my-5 mobile-responsive-padding">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block">
                            <img style="background-position: center;background-size: cover;" class="w-100" src="images/login.jpg" />
                        </div> -->
                        <div class="col-lg-12">
                            <div class="">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-2">Login</h1>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="user mt-4">
                                 @csrf
                                    <div class="form-group">
                                        <input  name="email"  id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter Email Address..."  required autocomplete="email" autofocus>
                                        <!-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group mt-5">
                                        <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter  Your Password"  name="password" required autocomplete="current-password">
                                        <!-- <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"> -->
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input  type="checkbox" name="remember" id="remember"  {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                        </label>
                                    </div>

                                    <button class="custom-button d-flex m-auto justify-content-center mt-4" type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Login') }}
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
