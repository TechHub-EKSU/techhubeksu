@extends('web.layout.techhub')

@section('content')
<!-- Background Area Start -->
<section id="slider-container" class="slider-area"> 
  <div class="slider-owl owl-theme owl-carousel">
    <div class="single-slide item" style="background-image: url({{ asset('assets/images') }}/web/slider/community.png)">
      <div class="slider-content-area">  
        <div class="container">
          <div class="row">
            <div class="col-md-12"> 
              <div class="slide-content-wrapper">
                <div class="slide-content">
                  <h2>Community</h2>
                  <p>Staying Connected with Like Minds for community building.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-slide item" style="background-image: url({{ asset('assets/images') }}/web/slider/community.png)">
      <div class="slider-content-area">   
        <div class="container">
          <div class="row">
            <div class="col-md-12"> 
              <div class="slide-content-wrapper">
                <div class="slide-content">
                  <h2>Individual</h2>
                  <p>Staying Connected with Like Minds for personal development.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-slide item" style="background-image: url({{ asset('assets/images') }}/web/slider/community.png)">
      <div class="slider-content-area">   
        <div class="container">
          <div class="row">
            <div class="col-md-12"> 
              <div class="slide-content-wrapper">
                <div class="slide-content">
                  <h2>Start Up</h2>
                  <p>Staying Connected with Like Minds for startup development.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>								
  </div>
</section>

<section class="cowork-area pt-120 pb-120">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="cowork-content section-title">
            <h2>What is TechHub EKSU?</h2>
            <p>TechHub EKSU is an innovative community for startups, communities, and creative minds to learn, grow and connect. The hub promotes the progress of tech-savvy students, tech startup owners, and entrepreneurs. This community helps inclined students and other innovative minds to learn, grow, connect, and collaborate on their projects as we ensure 100% satisfaction with our facilities.</p>
            <a class="banner-btn" href="{{ route('about.about') }}" data-text="about us"><span>about us</span></a>
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

<section class="benefit-area pb-115 pt-108">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-4 col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12 benefit-col">
        <div class="section-title text-left">
          <h2>Area of Focus</h2>
        </div>  
      </div>
    </div>
    <div class="row"> 
      <div class="col-lg-8 col-lg-offset-4 col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3 col-xs-12 benefit-col">
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">     
            <div class="single-benefit mb-40">
              <div class="benefit-icon">
                <a href="#"><span class="icon-browser"></span></a>
              </div>    
              <div class="benefit-content">
                <h3><a href="class.html">Web Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
              </div>
            </div>     
            <div class="single-benefit">
              <div class="benefit-icon">
                <a href="#"><span class="icon-mobile"></span></a>
              </div>    
              <div class="benefit-content">
                <h3><a href="class.html">Mobile Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">     
            <div class="single-benefit mb-40">
              <div class="benefit-icon">
                <a href="#"><span class="icon-paintbrush"></span></a>
              </div>    
              <div class="benefit-content">
                <h3><a href="class.html">Digital Design</a></h3>
                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
              </div>
            </div>     
            <div class="single-benefit">
              <div class="benefit-icon">
                <a href="#"><span class="icon-megaphone"></span></a>
              </div>    
              <div class="benefit-content">
                <h3><a href="class.html">Digital Marketing</a></h3>
                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 hidden-sm col-xs-12">     
            <div class="single-benefit mb-40">
              <div class="benefit-icon">
                <a href="#"><span class="icon-genius"></span></a>
              </div>    
              <div class="benefit-content">
                <h3><a href="class.html">Blockchain</a></h3>
                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
              </div>
            </div>     
            <div class="single-benefit">
              <div class="benefit-icon">
                <a href="#"><span class="icon-dial"></span></a>
              </div>    
              <div class="benefit-content">
                <h3><a href="class.html">Argumented / Visual Reality</a></h3>
                <p>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor in ut labore et dolore magna. </p>
              </div>
            </div>
          </div>     
        </div>
      </div>    
    </div>
  </div>
</section>

<div class="pricing-area pt-108 pb-120 text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="section-title">
          <h2>our pricing</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="single-table">
          <div class="table-head">
            <h4>individual</h4>
            <h6>Monthly / Space</h6>
          </div>
          <div class="table-body">
            <ul>
              <li>Basic - ₦2,000</li>
              <li>Premium - ₦2,500</li>
              <li>Internet[Daily] - ₦500</li>
              <li style="margin-bottom: 67px;"></li>
            </ul>
            <a class="banner-btn" href="#" data-text="get start"><span>get start</span></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="single-table">
          <div class="table-head">
            <h4>StartUp</h4>
            <h6>Monthly / Space</h6>
          </div>
          <div class="table-body">
            <ul>
              <li>Basic - ₦5,000</li>
              <li>Premium - ₦7,500</li>
              <li>Internet[Daily] - ₦1,000</li>
              <li>Meeting Room[Hourly] - ₦1,500</li>
            </ul>
            <a class="banner-btn" href="#" data-text="get start"><span>get start</span></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="single-table">
          <div class="table-head">
            <h4>community</h4>
            <h6>Hourly / Venue</h6>
          </div>
          <div class="table-body">
            <ul>
              <li>Basic - ₦1,000</li>
              <li>Premium - ₦1,500</li>
              <li>Internet[Hourly] - ₦500</li>
              <li style="margin-bottom: 67px;"></li>
            </ul>
            <a class="banner-btn" href="#" data-text="get start"><span>get start</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection