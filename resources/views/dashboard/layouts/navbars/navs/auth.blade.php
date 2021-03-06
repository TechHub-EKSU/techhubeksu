@if (auth()->user()->isAdmin())
  @include('dashboard.admin.layouts.nav.navbar')
@else
  @include('dashboard.user.layouts.nav.navbar')
@endif