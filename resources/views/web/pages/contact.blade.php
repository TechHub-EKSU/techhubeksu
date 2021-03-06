@extends('web.layout.techhub')

@section('pageTitle', __('Contact Us | ' . config('app.name')))

@section('content')
@include('web.includes.banner', ['bannerTitle' => "contact us", 'bannerMaster' => ""])
<section class="contact-area pt-120 pb-83">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-info">
          <h2>contact info</h2>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="single-info mb-30">
              <div class="info-icon">
                <i class="icon-map-pin"></i>
              </div>
              <div class="info-content">
                  <h3>Location :</h3>
                  <p>Sport Complex, Ekiti State University, Ado-Ekiti, Ekiti State, Nigeria.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="single-info">
              <div class="info-icon">
                <i class="icon-phone"></i>
              </div>
              <div class="info-content">
                <h3>Phone :</h3>
                <p>+234 812 841 1482</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="single-info">
              <div class="info-icon">
                <i class="icon-envelope"></i>
              </div>
              <div class="info-content">
                <h3>Mail :</h3>
                <p>info@techhubeksu.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="touch">
          <h2>get in touch</h2>
          <form id="contact-form" action="mail.php" method="post">
            <div class="row">
              <div class="col-md-6">
                <input type="text" name="name" id="name" placeholder="Name*">
              </div>
              <div class="col-md-6">
                <input type="text" name="email" id="email" placeholder="Mail*">
              </div>
              <div class="col-md-12">
                <input type="text" name="subject" id="subject" placeholder="Subject*">
                <textarea name="message" id="message" cols="15" rows="4" placeholder="Massage*"></textarea>
              </div>
            </div>
            <button class="banner-btn" data-text="send" type="submit"><span>send</span></button>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map-area">
          <div class="google-map-area">
            <div id="contacts" class="map-area">
              <iframe id="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.4282138081791!2d5.249432762270086!3d7.71392825983997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5d1ec3fff45f7254!2sGDG%20EKSU%20Hub%20(Ekiti%20State%20University)!5e0!3m2!1sen!2sng!4v1615040851586!5m2!1sen!2sng" width="100%" height="633" style="border:0;" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection