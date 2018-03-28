@extends('master')
@section('content')
<div class="container-fluid bigBack">
    <img class="loginBack" src="https://images.unsplash.com/photo-1453831362806-3d5577f014a4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9dd8da96be0724ab84e4147d428f6bba&auto=format&fit=crop&w=1038&q=80" />
    <div class="container">
        <div class="row mainRow">
            <div class="col">
                <div class="row ">
                    <div id="leftCol" class="col colRow">
                        <img id="logo" height="180" width="200" src="img/meal-up-logo.png" />
                    </div>
                </div>
                <div class="row">
                    <div id="wellHello" class="col colRow">
                        <h3 id="welcome">Welcome</h3>
                        <hr class="my-4"></hr>
                        <p id="tinyBod">Hello welcome to Meal Up where you can find any nutritious meals or just add some of your own!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col colRow1">
                        <div class="log">
                            <div class="logHeader">Login or Sign Up!</div>
                            <hr class="my-4"></hr>
                            <div class="logBody">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <!-- <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->

                                        <div class="col">
                                            <input id="email" type="email" class="firstMail form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address"> @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span> @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                        <div class="col">
                                            <input id="password" type="password" class="firstPass form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password"> @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span> @endif
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-outline-light mb-2" style="float:left;">
                                                {{ __('Login') }}
                                            </button>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                            <a class="btn btn-link newReg" href="/register" style="float:left;">
                                                Sign Up Now!
                                            </a>
                                            <a class="btn btn-link help1" href="{{ route('password.request') }}" style="float:right;">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row topIcons">
                    <div class="col">
                        <a href="https://www.facebook.com/?stype=lo&jlou=AfdcRT9kTFzrJiLwJq57CUQJQn_K-YmZaURxqn0pVpUfwYjfv83EWvA7Fg9bENoRVSjCupMVYrtixRgsDr3gGX885_JWbCZP9-If-UOmNqNs_Q&smuh=2157&lh=Ac9ntiQbc2-1Sufu">
                            <i class="fab fa-facebook-square fa-2x icon face"></i>
                        </a>
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram fa-2x icon finsta"></i>
                        </a>
                        <a href="https://twitter.com/?logged_out=1&lang=en">
                            <i class="fab fa-twitter fa-2x icon tweet"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bottomjs')

@endsection
