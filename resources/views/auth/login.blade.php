@extends('layouts.app')

@section('content')

<div class="wrapper-page">
    <div class="panel panel-color panel-primary panel-pages">
        <div class="panel-heading bg-img">
            <div class="bg-overlay"></div>
            <h3 class="text-center m-t-10 text-white"> Sign In to <strong>Inventory</strong> </h3>
        </div>

        <div class="panel-body">
        <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control {{ $errors->has('email') ?
                            ' is-invalid' : '' }} input-lg " id="email" type="email"
                           name="email" value="{{ old('email') }}" required autofocus placeholder="Email Address">
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control{{ $errors->has('password') ?
                            ' is-invalid' : '' }} input-lg" id="password" type="password" name="password"
                           required placeholder="Password">
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
            </div>


            <div class="form-group">
                <div class="col-xs-12">
                <div class="checkbox checkbox-primary">
                    <input class="form-check-input" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30">
                    <div class="col-sm-7">
                        <a href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>

                </div>
            </div>
        </form>
        </div>
</div>
    </div>

@endsection
