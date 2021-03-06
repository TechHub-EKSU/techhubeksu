<div class="sidebar" data-color="purple" data-background-color="white">
  <div class="text-center">
    <a href="{{ route('index') }}" class="logo"><img src="{{ asset('assets/images') }}/brand/logo_text.png" alt="{{ config('app.name') }}" class="img-fluid" width="200"/></a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
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
      <li class="nav-item {{ $parentSection == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#navbar-user-management" aria-expanded="{{ $parentSection == 'user-management' ? 'true' : '' }}">
          <i class="material-icons">groups</i>
          <p>{{ __('User Management') }}<b class="caret"></b></p>
        </a>
        <div class="collapse {{ $parentSection == 'user-management' ? 'show' : '' }}" id="navbar-user-management">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">people_alt</i>
                <span class="sidebar-normal"> {{ __('Users') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ $parentSection == 'site-management' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#navbar-site-management" aria-expanded="{{ $parentSection == 'site-management' ? 'true' : '' }}">
          <i class="fa fa-cog"></i>
          <p>{{ __('Site Management') }}<b class="caret"></b></p>
        </a>
        <div class="collapse {{ $parentSection == 'site-management' ? 'show' : '' }}" id="navbar-site-management">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'teams' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="fa fa-newspaper-o"></i>
                <span class="sidebar-normal">{{ __('Team') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'services' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="fa fa-magic"></i>
                <span class="sidebar-normal">{{ __('Service') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'categories' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="fa fa-cogs"></i>
                <span class="sidebar-normal"> {{ __('Category') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'plans' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="fa fa-tasks"></i>
                <span class="sidebar-normal"> {{ __('Plan') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      {{-- <li class="nav-item {{ $parentSection == 'tools' ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#navbar-tools" aria-expanded="{{ $parentSection == 'tools' ? 'true' : '' }}">
          <i class="fa fa-wrench"></i>
          <p>{{ __('Tools') }}<b class="caret"></b></p>
        </a>
        <div class="collapse {{ $parentSection == 'tools' ? 'show' : '' }}" id="navbar-tools">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'sales' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('admin.sale.index') }}">
                <i class="material-icons">receipt_long</i>
                  <p>{{ __('Sales') }}</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'reports' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('admin.reports') }}">
                <i class="fa fa-book"></i>
                <span class="sidebar-normal">{{ __('Wallet Report') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'guide' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('admin.guide') }}">
                <i class="fa fa-question-circle"></i>
                <span class="sidebar-normal"> {{ __('Guide') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'planhelpers' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('admin.plans') }}">
                <i class="fa fa-tasks"></i>
                <span class="sidebar-normal"> {{ __('Plan Helper') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}
    </ul>
  </div>
</div>