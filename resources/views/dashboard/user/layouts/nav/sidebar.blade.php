<div class="sidebar" data-color="purple" data-background-color="white">
  <div class="text-center">
    <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images') }}/brand/logo_text.png" alt="{{ config('app.name') }}" class="img-fluid" width="200"/></a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Home') }}</p>
        </a>
      </li>
      <li class="nav-item {{ $parentSection == 'account' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#navbar-account" aria-expanded="{{ $parentSection == 'account' ? 'true' : '' }}">
          <i class="material-icons">person</i>
          <p>{{ __('My Account') }}<b class="caret"></b></p>
        </a>
        <div class="collapse {{ $parentSection == 'account' ? 'show' : '' }}" id="navbar-account">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="fa fa-user"></i>
                <span class="sidebar-normal">{{ __('Profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == '' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i>
                <span class="sidebar-normal"> {{ __('Logout') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>