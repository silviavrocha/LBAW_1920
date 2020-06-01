@extends('layouts.app')

@section('title','Sign In')

@section('content')

<meta property="og:title" content="BidMonkeys- Your animal auction website" />
<meta property="og:description" content="Come back, there's lots more animals waiting..." />
<meta property="og:image" content="{{asset('assets/logo.png')}}" />
<meta property="og:locale" content="en_GB" />

<div id="signup_bg">
    <div id="main">
        <div id="loginform" class="px-4">
            <h2>SIGN IN</h2>

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <label style="display:none" for="email"></label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>
                @if ($errors->has('email'))
                <span class="error text-danger">
                    {{ $errors->first('email') }}
                </span>
                @endif
                <label style="display:none" for="password"></label>
                <input id="password" type="password" name="password" placeholder="Password" required>
                @if ($errors->has('password'))
                <span class="error text-danger">
                    {{ $errors->first('password') }}
                </span>
                @endif

                <div class="form-group ml-1">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input " id="checkbox-3" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label text-dark" for="checkbox-3">Remember me</label>
                    </div>
                </div>

                <div class="d-flex mt-1 flex-row align-items-center">
                    <h6>Forgot password?&nbsp;</h6>
                    <a class="text-dark" href="{{ route('password.request') }}">
                        <h6>Recover</h6>
                    </a>
                </div>

                <div class="form-group">
                    <div class=" d-flex align-self-center justify-content-center align-items-center">
                        <button class="mx-auto btn btn-green" type="submit">SIGN IN</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="d-flex justify-content-around align-items-center">
                        
                        <button class="btn btn-outline-black ml-0" onclick="fb_login();">
                            <fb:login-button class="d-none" scope="public_profile,email" onlogin="checkLoginState();">
                            </fb:login-button>
                            Sign up with&nbsp;
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        

                        <div class="g-signin2" data-onsuccess="onSignIn"></div>
                        
                    </div>
                </div>

                <div class="d-flex mt-2 flex-row justify-content-center align-items-center">
                    <p>Don't have an account?&nbsp;</p>
                    <a class="text-dark font-weight-bold" href="{{ route('register') }}">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection