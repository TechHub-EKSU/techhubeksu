@extends('dashboard.layouts.app', ['parentSection' => '', 'activePage' => 'home', 'titlePage' => __(auth()->user()->name)])

@section('pageTitle', __(auth()->user()->name . ' | ' . config('app.name')))

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center" style="margin-top: 20%">
    <div class="col-lg-7 col-md-8">
      <div class="card mb-3">
        <div class="card-header text-center">
          <h4 class="card-title"><strong>{{ __('Dashboard') }}</strong></h4>
        </div>
        <div class="card-body">
          <p class="card-description text-center">
            {{ __('You are logged in!') }}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection