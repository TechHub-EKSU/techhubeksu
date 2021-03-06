@extends('dashboard.layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __(config('app.name'))])

@section('pageTitle', __('Register | ' . config('app.name')))

@section('content')
<div class="container" style="height: auto">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card mb-3">
          <div class="card-header text-center">
            <p><a href="{{ url('auth/facebook') }}"><img src="{{ asset('assets/images/web/brand/facebook_register.png') }}" alt="Continue with Facebook" width="100%"></a></p>
            <p><a href="{{ url('auth/google') }}"><img src="{{ asset('assets/images/web/brand/google_register.png') }}" alt="Sign in with Google" width="100%"></a></p>
          </div>
          <div class="card-body ">
            <p class="card-description text-center">{{ __('Or Be Classical') }}</p>
            <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="material-icons">face</i>
                  </span>
                </div>
                <input type="text" name="name" class="form-control" placeholder="{{ __('Name...') }}" value="{{ old('name') }}">
              </div>
              @if ($errors->has('name'))
                <div class="error text-danger pl-3" for="name" style="display: block;">
                  <small>{{ $errors->first('name') }}</small>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">email</i>
                  </span>
                </div>
                <input type="email" name="email" class="form-control" placeholder="{{ __('Email Address...') }}" value="{{ old('email') }}">
              </div>
              @if ($errors->has('email'))
                <div class="error text-danger pl-3" for="email" style="display: block;">
                  <small>{{ $errors->first('email') }}</small>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('username') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">sentiment_satisfied_alt</i>
                  </span>
                </div>
                <input type="text" name="username" class="form-control" placeholder="{{ __('username...') }}" value="{{ old('username') }}">
              </div>
              @if ($errors->has('username'))
                <div class="error text-danger pl-3" for="username" style="display: block;">
                  <small>{{ $errors->first('username') }}</small>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('category') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">batch_prediction</i>
                  </span>
                </div>
                <select name="category" class="selectpicker" data-style="btn btn-light">
                  @foreach (config('techhub.categories') as $value => $category)
                    @if ($value != 'exco' && $value != 'moderator')
                      <option value="{{ $value }}" {{ $value == old('category') ? 'selected' : '' }}>{{ $category }}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              @if ($errors->has('category'))
                <div class="error text-danger pl-3" for="category" style="display: block;">
                  <small>{{ $errors->first('category') }}</small>
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
                <input type="password" name="password" class="form-control" placeholder="{{ __('Password...') }}">
              </div>
              @if ($errors->has('password'))
                <div class="error text-danger pl-3" for="password" style="display: block;">
                  <small>{{ $errors->first('password') }}</small>
                </div>
              @endif
            </div>
            <div class="bmd-form-group{{ $errors->has('password_confirmation') ? ' has-danger' : '' }} mt-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password...') }}">
              </div>
              @if ($errors->has('password_confirmation'))
                <div class="error text-danger pl-3" for="password_confirmation" style="display: block;">
                  <small>{{ $errors->first('password_confirmation') }}</small>
                </div>
              @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" checked required>
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
                {{ __('I agree with the ') }} <a href="{{ route('legal.privacy') }}" class="text-secondary">{{ __('Privacy Policy') }}</a>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-light">{{ __('Create account') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection