@extends('front.layout.master')
@section('title','Login')
@section('body')

<!--Breadcrumb sectioon begin-->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb sectioon end-->

<!--Register sectioon begin-->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form">
                    <h2>Login</h2>
                    @if(session('notification'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('notification')}}
                    </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="email"> Email address</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="group-input">
                            <label for="passs">Password</label>
                            <input type="password" name="password" id="pass" />
                        </div>
                        <div class="group-input gi-check">
                            <div class="gi-more">
                                <label for="save-pass">
                                    Save Password
                                    <input type="checkbox" name="" id="save-pass" name="remember" />
                                    <span class="checkmark"></span>
                                </label>
                                <a href="#" class="forget-pass">Forget your Password</a>
                            </div>
                        </div>
                        <button type="submit" class="site-btn login-btn">Sign in</button>
                    </form>
                    <div class="switch-login">
                        <a href="./account/register" class="or-login">Or create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Register sectioon end-->

@endsection
