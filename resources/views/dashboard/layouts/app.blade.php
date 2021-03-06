<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  @include('includes.analytics')
  @laravelPWA

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="dns-prefetch" href="https://fonts.googleapis.com">
  <link rel="dns-prefetch" href="https://maxcdn.bootstrapcdn.com">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('pageTitle', config('app.name'))</title>
  @include('includes.seo')

  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('assets/material') }}/css/plugins/datatables.min.css" rel="stylesheet" />
  <link href="{{ asset('assets/vendor/pace/pace.css') }}" type="text/css" rel="stylesheet" />
  <link href="{{ asset('assets/material') }}/css/material-dashboard.min.css" rel="stylesheet" />
  <!-- Page CSS Files -->
  @stack('css')
</head>
<body class="{{ $class ?? '' }}">
  @include('includes.loader')
  @include('sweetalert::alert')
  @auth
    @if (Request::is('password/confirm') || Request::is('password/reset'))
      @include('dashboard.layouts.page_templates.guest')
    @else
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      @include('dashboard.layouts.page_templates.auth')
      <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
          <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
          </a>
          <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
              <a href="javascript:void(0)" class="switch-trigger active-color">
                <div class="badge-colors ml-auto mr-auto">
                  <span class="badge filter badge-primary active" data-color="purple"></span>
                  <span class="badge filter badge-azure" data-color="azure"></span>
                  <span class="badge filter badge-green" data-color="green"></span>
                  <span class="badge filter badge-warning" data-color="orange"></span>
                  <span class="badge filter badge-danger" data-color="danger"></span>
                  <span class="badge filter badge-rose" data-color="rose"></span>
                </div>
                <div class="clearfix"></div>
              </a>
            </li>
            <br>
            <li class="header-title">Want your web app?</li>
            <li class="button-container">
              <a href="{{ ('https://wa.me/2348128411482?text=') . urlencode('Hi, my name is ' . auth()->user()->name . '. I got here from the '. config('app.name') . ' website I\'d like to enquire about having web service(s) for business or personal use.') }}" target="_blank" class="btn btn-default btn-block">
                Emmanuel Joseph(JET)
              </a>
            </li>
          </ul>
        </div>
      </div>
    @endif
  @endauth
  @guest
    @include('dashboard.layouts.page_templates.guest')
  @endguest

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
        } catch (err) {
          console.error('There was an error trying to share this content');
          return false;
        }
      }
    }

    const formatter = new Intl.NumberFormat();
  </script>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/vendor/pace/pace.js') }}"></script>
  <script src="{{ asset('assets/material') }}/js/core/jquery.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/core/popper.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/core/bootstrap-material-design.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/moment.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/jquery.validate.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/bootstrap-selectpicker.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/jquery.dataTables.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/bootstrap-tagsinput.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/jasny-bootstrap.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/nouislider.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/arrive.min.js"></script>
  <script src="{{ asset('assets/material') }}/js/plugins/bootstrap-notify.js"></script>
  <script src="{{ asset('assets/material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script src="{{ asset('assets/material') }}/js/settings.js"></script>
  <script>
    function loadingwidget() {
      $('#loader').show();
    }
  </script>
  @stack('js')
</body>
</html>