@extends('dashboard.layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'reset', 'title' => __(config('app.name'))])

@section('pageTitle', __('Confirm Password | ' . config('app.name')))

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="card mb-3">
          <div class="card-header text-center">
            <h4 class="card-title"><strong>{{ __('Confirm Password') }}</strong></h4>
          </div>
          <div class="card-body">
            <p class="card-description text-center">{{ __('Please confirm your password before continuing.') }}</p>
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password" class="form-control" placeholder="{{ __('Password') }}" value="{{ old('password') }}" required>
              </div>
              @if ($errors->has('password'))
                <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                  <small>{{ $errors->first('password') }}</small>
                </div>
              @endif
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-light">{{ __('Confirm Password') }}</button>
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
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          <a class="text-light" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <small>{{ __('Not ' . auth()->user()->name . '?') }}</small>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection