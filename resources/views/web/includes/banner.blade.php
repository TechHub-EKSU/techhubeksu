<div class="banner-area-wrapper">
  <div class="banner-area text-center">	
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="banner-content-wrapper">
            <div class="banner-content">
              <h2>{{ $bannerTitle }}</h2> 
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="banner-bottom">
      <div class="banner-breadcrumb text-center">
        <ul>
          <li><a href="{{ route('index') }}">home</a> > </li>
          @if ($bannerMaster)
            <li>{{ $bannerMaster }} > </li>
          @endif
          <li>{{ $bannerTitle }}</li>
        </ul>
      </div>
    </div>
  </div>
</div>