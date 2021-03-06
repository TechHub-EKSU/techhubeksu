@extends('dashboard.layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'reset', 'title' => __(config('app.name'))])

@section('pageTitle', __('Forgot Password | ' . config('app.name')))

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="card mb-3">
          <div class="card-header text-center">
            <h4 class="card-title"><strong>{{ __('Forgot Password') }}</strong></h4>
          </div>
          <div class="card-body">
            @if (session('status'))
              <div class="row">
                <div class="col-sm-12">
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>{{ session('status') }}</span>
                  </div>
                </div>
              </div>
            @endif
            <div class="bmd-form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
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
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-light">{{ __('Send Password Reset Link') }}</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection