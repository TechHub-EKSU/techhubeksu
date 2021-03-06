@extends('dashboard.layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __(config('app.name'))])

@section('pageTitle', __('Login | ' . config('app.name')))

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card mb-3">
          <div class="card-header text-center">
            <p><a href="{{ url('auth/facebook') }}"><img src="{{ asset('assets/images/web/brand/facebook_login.png') }}" alt="Login with Facebook" width="90%"></a></p>
            <p><a href="{{ url('auth/google') }}"><img src="{{ asset('assets/images/web/brand/google_login.png') }}" alt="Sign in with Google" width="90%"></a></p>
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Or Sign in with your credentials') }}</p>
            <div class="bmd-form-group @if($errors->has('email') || $errors->has('username')) has-danger @endif">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="{{ __('Username or Email Address...') }}" value="{{ old('email') }}">
              </div>
              @if ($errors->has('email') || $errors->has('username'))
                <div class="error text-danger pl-3" for="email" style="display: block;">
                  <small>{{$errors->first('email') }} {{ $errors->first('username')}}</small>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="{{ old('password') }}">
              </div>
              @if ($errors->has('password'))
                <div class="error text-danger pl-3" for="password" style="display: block;">
                  <small>{{ $errors->first('password') }}</small>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-light">{{ __('Lets Go') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-6">
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-light">
              <small>{{ __('Forgot password?') }}</small>
            </a>
          @endif
        </div>
        <div class="col-6 text-right">
          <a href="{{ route('register') }}" class="text-light">
            <small>{{ __('Create new account') }}</small>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection