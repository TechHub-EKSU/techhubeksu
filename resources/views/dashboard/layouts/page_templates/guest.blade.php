@include('dashboard.layouts.navbars.navs.guest')
<div class="wrapper wrapper-full-page">
  <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{ asset('assets/images/web') }}/auth_bg.jpg'); background-size: cover; background-position: top center;align-items: center;" data-color="black">
    @yield('content')
    @include('dashboard.layouts.footers.guest')
  </div>
</div>