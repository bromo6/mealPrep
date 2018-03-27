@extends('master') @section('content')
<div class="container-fluid loginBack">
    <div class="container">
        <div class="row mainRow">
            <div class="col">
                <div class="row ">
                    <div id="leftCol" class="col colRow">
                        <h2 id="leftTitle">MEAL </br> UP</h2>
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
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address"> @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span> @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->

                                        <div class="col">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password"> @if ($errors->has('password'))
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
                        <i class="fab fa-facebook-square fa-2x icon face"></i>

                        <i class="fab fa-instagram fa-2x icon finsta"></i>

                        <i class="fab fa-twitter fa-2x icon tweet"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
