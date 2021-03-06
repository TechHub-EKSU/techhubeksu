@if (auth()->user()->isAdmin())
  @include('dashboard.admin.layouts.nav.sidebar')
@else
  @include('dashboard.user.layouts.nav.sidebar')
@endif