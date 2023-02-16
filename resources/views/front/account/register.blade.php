@extends('front.layout.master')
@section('title','Register')
@section('body')

<!--Breadcrumb sectioon begin-->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i>Home</a>
                    <span>Register</span>
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
                <div class="register-form">
                    <h2>Register</h2>
                    <form action="" method="post">
                        @csrf
                        <div class="group-input">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="group-input">
                            <label for="email">Email address</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="group-input">
                            <label for="passs">Password</label>
                            <input type="password" name="password" id="pass" />
                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirm Password</label>
                            <input type="password_confirmation" name="password_confirmation" id="con-pass" />
                        </div>
                        <button type="submit" class="site-btn register-btn">Register</button>
                    </form>
                    <div class="switch-login">
                        <a href="./account/login" class="or-login">Or Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Register sectioon end-->

@endsection
