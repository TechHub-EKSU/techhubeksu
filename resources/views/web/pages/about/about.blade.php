@extends('web.layout.techhub')

@section('pageTitle', __('About Us | ' . config('app.name')))

@section('content')
@include('web.includes.banner', ['bannerTitle' => "about us", 'bannerMaster' => "about"])
<section class="cowork-area pt-120 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="cowork-content section-title">
          <h2>What is Cowork?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiust tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volup velit esse cillum dolore eu fugiat nulla. </p>
          <a class="banner-btn" href="#" data-text="about us"><span>about us</span></a>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="cowork-img">
          <div class="row">
            <div class="col-sm-6">
              <a href="#"><img src="{{ asset('assets/web') }}/img/co-worker/coworker1.jpg" alt="cowork"></a>
            </div>
            <div class="col-sm-6">
              <a href="#"><img src="{{ asset('assets/web') }}/img/co-worker/coworker2.jpg" alt="cowork"></a>
            </div>
            <div class="col-sm-12">
              <a href="#"><img src="{{ asset('assets/web') }}/img/co-worker/coworker3.jpg" alt="cowork"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="fun-area text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="single-fun">
          <h3 class="counter">450</h3>
          <p>individual</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="single-fun">
          <h3 class="counter">240</h3>
          <p>startup</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="single-fun">
          <h3 class="counter">330</h3>
          <p>community</p>
        </div>
      </div>
      <div class="col-md-3 hidden-sm col-xs-12">
        <div class="single-fun">
          <h3 class="counter">150</h3>
          <p>awards</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="partner-area text-center pt-113 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-title">
          <h2>our partner</h2>
        </div>
      </div>
    </div>
    <div class="partner-owl owl-carousel"> 
      <div class="single-partner">
        <a href="#"><span><img src="{{ asset('assets/web') }}/img/partner/partner1.png" alt="partner"></span></a>
      </div>
      <div class="single-partner">
        <a href="#"><span><img src="{{ asset('assets/web') }}/img/partner/partner2.png" alt="partner"></span></a>
      </div>
      <div class="single-partner">
        <a href="#"><span><img src="{{ asset('assets/web') }}/img/partner/partner3.png" alt="partner"></span></a>
      </div>
      <div class="single-partner">
        <a href="#"><span><img src="{{ asset('assets/web') }}/img/partner/partner4.png" alt="partner"></span></a>
      </div>
      <div class="single-partner">
        <a href="#"><span><img src="{{ asset('assets/web') }}/img/partner/partner5.png" alt="partner"></span></a>
      </div>
    </div> 
  </div>
</div>
@endsection