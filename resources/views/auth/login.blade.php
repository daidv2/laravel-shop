@extends('layouts.site.app')

@section('content')
<section id="product">
    <div class="container">
        <!--  breadcrumb -->
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
                <span class="divider">/</span>
            </li>
            <li class="active">Login</li>
        </ul>
        <!-- Account Login-->
        <div class="row">
            <div class="col-lg-9">
                <h1 class="heading1"><span class="maintext">Login</span><span class="subtext">First Login here to View All your account information</span>
                </h1>
                <section class="newcustomer">
                    <h2 class="heading2">New Customer </h2>
                    <div class="loginbox">
                        <h4 class="heading4"> Register Account</h4>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's
                            status, and keep track of the orders you have previously made.</p>
                        <br>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's
                            status, and keep track of the orders you have previously made.</p>
                        <br>
                        <br>
                        <a href="#" class="btn btn-orange">Continue</a>
                    </div>
                </section>
                <section class="returncustomer">
                    <h2 class="heading2">Returning Customer </h2>
                    <div class="loginbox">
                        <h4 class="heading4">I am a returning customer</h4>
                        <form class="form-vertical" action="{{ route('login') }}" method="POST">
                            {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label">E-Mail Address:</label>
                                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label">Password:</label>
                                    <input id="password" type="password" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-orange">Login</button>
                                <a class="" href="{{ route('password.request') }}">Forgotten Password</a>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>

            <!-- Sidebar Start-->
            <aside class="col-lg-3">
                <div class="sidewidt">
                    <h2 class="heading2"><span>Account</span></h2>
                    <ul class="nav nav-list categories">
                        <li>
                            <a href="#"> My Account</a>
                        </li>
                        <li>
                            <a href="#">Edit Account</a>
                        </li>
                        <li>
                            <a href="#">Password</a>
                        </li>
                        <li>
                            <a href="#">Wish List</a>
                        </li>
                        <li><a href="#">Order History</a>
                        </li>
                        <li><a href="#">Downloads</a>
                        </li>
                        <li><a href="#">Returns</a>
                        </li>
                        <li>
                            <a href="#"> Transactions</a>
                        </li>
                        <li>
                            <a href="category.html">Newsletter</a>
                        </li>
                        <li>
                            <a href="category.html">Logout</a>
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- Sidebar End-->
        </div>
    </div>
</section>
@endsection
