<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.analytics')
  @laravelPWA

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://use.fontawesome.com">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

  <title>@yield('pageTitle', config('app.name'))</title>
  @include('includes.seo')

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link href="{{ asset('assets/vendor/pace/pace.css') }}" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/animate.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/animate-heading.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/reset.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/meanmenu.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/magnific-popup.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/et-line-icon.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/style.css?v={{ time() }}">
  <link rel="stylesheet" href="{{ asset('assets/web') }}/css/responsive.css">
  <script src="{{ asset('assets/web') }}/js/vendor/modernizr-2.8.3.min.js"></script>

  @yield('css')
</head>
<body>
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  @include('includes.loader')
  @include('sweetalert::alert')

  <header class="top">
    <div class="header-area header-sticky">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="logo">
              <a href="{{ route('index') }}"><img src="{{ asset('assets/images/brand/logo_text.png') }}" width="80%" alt="{{ config('app.name') }}" /></a>
            </div>
          </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="content-wrapper">
              <div class="main-menu text-right">
                <nav>
                  <ul>
                    @if (Request::is('offline'))
                      <li><p>You are Offline</p></li>
                    @else
                      <li><a href="{{ route('index') }}">Home</a></li>
                      <li><a href="#">About</a>
                        <ul>
                          <li><a href="{{ route('about.about') }}">About Us</a></li>
                          <li><a href="{{ route('about.team') }}">Our Team</a></li>
                        </ul>
                      </li>
                      <li><a href="{{ route('contact') }}">Contact us</a></li>
                      @if (Route::has('login'))
                        @auth
                          @if (auth()->user()->isAdmin())
                            <li><a href="{{ route('admin.dashboard') }}">{{ auth()->user()->name }}</a></li>
                          @else
                            <li><a href="{{ route('user.home') }}">{{ auth()->user()->name }}</a></li>
                          @endif
                        @else
                          <li><a href="{{ route('login') }}">Login</a></li>
                          @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register Now</a></li>
                          @endif
                        @endauth
                      @endif
                    @endif
                  </ul>
                </nav>
              </div>
              <div class="mobile-menu hidden-lg hidden-md"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  @yield('content')

  <footer class="footer-area">
    <div class="container">
      <div class="main-footer">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-widget mr-50">
              <h3>about us</h3>
              <p>Innovative community for young talents to grow, connect and develop ideas to solving global and local challenges.</p>
              <ul>
                <li><a href="https://github.com/TechHub-EKSU"><i class="zmdi zmdi-github"></i></a></li>
                <li><a href="https://www.instagram.com/techhubeksu"><i class="zmdi zmdi-instagram"></i></a></li>
                <li><a href="https://twitter.com/TechHubEKSU"><i class="zmdi zmdi-twitter"></i></a></li>
                <li><a href="https://chat.whatsapp.com/JQkrId2Cryt3HAbxuxWCoy"><i class="zmdi zmdi-whatsapp"></i></a></li>
                <li><a href="https://www.facebook.com/TechHubEksu"><i class="zmdi zmdi-facebook"></i></a></li>
                <li class="hidden-md hidden-lg"><a href="javascript:;" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Looking for a tech co-working space in Ekiti State? If yes, then {{ config('app.name') }} is your stop! Check out our amazing offers and services now at')"><i class="zmdi zmdi-share"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-3 col-xs-12">
            <div class="single-widget ml-100">
              <h3>contact us</h3>
              <p>beside Heritage bank,<br>
              Ekiti State University,<br>
              Ado-Ekiti, Ekiti State,<br>
              Nigeria.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-5 col-xs-12">
            <div class="single-widget ml-85">
              <h3>links</h3>
              <ol>
                <li><a href="{{ route('legal.terms') }}" style="color: #fff; font-size: 14px">Terms of Use</a></li>
                <li><a href="{{ route('legal.privacy') }}" style="color: #fff; font-size: 14px">Privacy Policy</a></li>
                <li><a href="{{ route('legal.cookie') }}" style="color: #fff; font-size: 14px">Cookie Policy</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>   
      <div class="footer-bottom text-center">
        <div class="row">
          <div class="col-6">
            <p>Copyright <i class="fa fa-copyright"></i> {{ now()->year }} <strong>{{ config('app.name') }}</strong> All rights reserved.</p>
          </div> 
        </div>
      </div>
    </div>
  </footer>

  <script>
    async function share(title, url, text) {
      if (window.Windows) {
        const DataTransferManager = window.Windows.ApplicationModel.DataTransfer.DataTransferManager;

        const dataTransferManager = DataTransferManager.getForCurrentView();
        dataTransferManager.addEventListener("datarequested", (ev) => {
          const data = ev.request.data;

          data.properties.title = title;
          data.properties.url = url;
          data.setText(text);
        });

        DataTransferManager.showShareUI();
        return true;
      } else if (navigator.share) {
        try {
          await navigator.share({
            title: title,
            url: url,
            text: text,
          });
          return true;
        } catch {
          return false;
        }
      }
    }
  </script>

  <!-- JS Files -->
  <script src="{{ asset('assets/vendor/pace/pace.js') }}"></script>
  <script src="{{ asset('assets/web') }}/js/vendor/jquery-1.12.0.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/jquery.meanmenu.js"></script>
  <script src="{{ asset('assets/web') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/isotope.pkgd.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/imagesloaded.pkgd.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/jquery.counterup.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/waypoints.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/ajax-mail.js"></script>
  <script src="{{ asset('assets/web') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/animate-heading.js"></script>
  <script src="{{ asset('assets/web') }}/js/jquery.mb.YTPlayer.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="{{ asset('assets/web') }}/js/plugins.js"></script>
  <script src="{{ asset('assets/web') }}/js/main.js"></script>
  <script>
    function loadingwidget() {
      $('#loader').show();
    }
  </script>

  @yield('js')
</body>
</html>