@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/frontend/styles/contact_responsive.css')}}">
<div class="container">
        
        <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                    <div class="col-lg-5 offset-lg-1" style="border: 1px solid grey; border-radius: 10px; padding: 20px;">
                        <div class="contact_form_container">
                            <div class="contact_form_title text-center">Sign In</div>
                            <form action="{{ route('login') }}" id="contact_form" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                        aria-describedby="emailHelp" placeholder="Email or Phone" required="">
                                    <small id="emailHelp" class="form-text text-muted">Use your email or phone number that you registered.</small>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"></label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" 
                                        aria-describedby="emailHelp" placeholder="Password" required="">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="contact_form_button">
                                    <button type="submit" class="button contact_submit_button">Login</button>
                                </div>
                            </form>
                            <br>
                            <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a> <br>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fab fa-facebook-square"> Login with Facebook</i> </button>
                            <button type="submit" class="btn btn-danger btn-block"><i class="fab fa-google"> Login with Google</i> </button>
                        </div>
                    </div>
              


                <div class="col-lg-5 offset-lg-1" style="border: 1px solid grey; border-radius: 10px; padding: 20px;">
                    <div class="contact_form_container">
                        <div class="contact_form_title text-center">Sign Up</div>
                        <form action="{{ route('register') }}" id="contact_form" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Your Full Name" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" name="phone" 
                                 placeholder="Enter Your Phone" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" name="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" aria-describedby="emailHelp" placeholder="Enter Your Password" required="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1"></label>
                                <input type="password" class="form-control" name="password_confirmation" aria-describedby="emailHelp" 
                                       placeholder="Confirm Your Password" required="">
                            </div>


                            <div class="contact_form_button">
                                <button type="submit" class="button contact_submit_button">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="panel"></div>
    </div>

</div>
@endsection
