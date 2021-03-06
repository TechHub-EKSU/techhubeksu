@extends('dashboard.layouts.app', ['parentSection' => '', 'activePage' => 'verify', 'titlePage' => __(config('app.name'))])

@section('pageTitle', __('Verify Account | ' . config('app.name')))

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center" style="margin-top: 20%">
    <div class="col-lg-7 col-md-8">
      <div class="card mb-3">
        <div class="card-header text-center">
          <h4 class="card-title"><strong>{{ __('Verify Your Email Address') }}</strong></h4>
        </div>
        <div class="card-body">
          <p class="card-description text-center">
            @if (session('resent'))
              <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                <span>{{ __('A fresh verification link has been sent to your email address.') }}</span>
              </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form class="text-center" method="POST" action="{{ route('verification.resend') }}">
              @csrf
              <button type="submit" class="btn btn-light align-baseline">{{ __('click here to request another') }}</button>.
            </form>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection