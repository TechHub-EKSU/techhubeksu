<div class="row align-items-center justify-content-lg-between">
  <div class="col-xl-6">
    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
      <li class="nav-item"><a href="{{ route('legal.privacy') }}" class="nav-link">{{ __('Privacy Policy') }} </a></li>
      <li class="nav-item"><a href="{{ route('legal.terms') }}" class="nav-link">{{ __('Terms & Conditions') }}</a></li>
      <li class="nav-item d-sm-none"><a href="javascript:;" class="nav-link" onclick="share('{{ config('app.name') }}', '{{ config('app.url') }}', 'Looking for a tech co-working space in Ekiti State? If yes, then {{ config('app.name') }} is your stop! Check out our amazing offers and services now at')">{{ __('Share') }} <i class="fa fa-share-alt"></i></a></li>
    </ul>
  </div>
  <div class="col-xl-6">
    <div class="copyright">
      Copyright &copy; {{ now()->year }} <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
    </div>
  </div>
</div>