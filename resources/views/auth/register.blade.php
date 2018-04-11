@extends('master')

@section('content')
<div class="container-fluid bigBack">
    <img class="loginBack" src="https://images.unsplash.com/photo-1453831362806-3d5577f014a4?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9dd8da96be0724ab84e4147d428f6bba&auto=format&fit=crop&w=1038&q=80" />
    <div class="container">
    <div class="row mainRow1 text-center">
        <!-- <div class="row">
            <div class="col">
                <img src="img/meal-up-logo.png" />
            </div>
        </div> -->
        <div class="col">
            <div class="row pt-5 mb-5">
                <div class="col">
                    <h1>{{ __('Register') }}</h1>
                </div>
            </div>

                <div class="row">
                    <div class="col" style="margin-left: -145px;">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col col-form-label text-md-right"></label>

                            <div class="col">
                                <input id="name" type="text" placeholder="Name" class=" regInfo form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col col-form-label text-md-right"></label>

                            <div class="col">
                                <input id="email" type="email" placeholder="Email" class=" regInfo form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col col-form-label text-md-right"></label>

                            <div class="col">
                                <input id="password" placeholder="Password" type="password" class=" regInfo form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col col-form-label text-md-right"></label>

                            <div class="col">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class=" regInfo form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <a href="/about">
                                    <button type="submit" class="btn regBtn btn-success">
                                        {{ __('Register') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

        </div>
    </div>
</div>
</div>
@endsection
