<meta name="author" content="Emmanuel Joseph(JET)"/>
<meta name="title" content="@yield('pageTitle', config('app.name'))">
<meta name="keywords" content="{{ config('app.name') }}, {{ config('app.nick') }}, dsc, developer student clubs, google developers, sub saharan africa, students, technology,fdc, facebook developer circle, ado-ekiti, women will, aeternity, aeternity ekiti, blockchain, technology, google, facebook, web development, mobile development, digital design, hub, ekiti hub, vr, ar, nigeria, africa, emmanueljet, emmanuel joseph, jet, emmanuel joseph(jet)"/>
<meta name="description" content="@yield('pageDescription', 'TechHub EKSU is an innovative community for startups, communities, and creative minds to connect, collaborate and build.')">
<link rel="canonical" href="{{ config('app.url') }}" />

<!-- Google -->
<meta name="google-site-verification" content="">
<link itemprop="url" href="{{ url()->current() }}">
<meta itemprop="name" content="@yield('pageTitle', config('app.name'))">
<meta itemprop="description" content="@yield('pageDescription', 'TechHub EKSU is an innovative community for startups, communities, and creative minds to connect, collaborate and build.')">
<meta itemprop="image" content="@yield('pageImage', config('app.url').'/assets/images/brand/logo_with_dark_bg.jpg')">


<!-- Facebook -->
<meta property="fb:app_id" content="573728290182656" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:title" content="@yield('pageTitle', config('app.name'))" />
<meta property="og:description" content="@yield('pageDescription', 'TechHub EKSU is an innovative community for startups, communities, and creative minds to connect, collaborate and build.')" />
<meta property="og:image" content="@yield('pageImage', config('app.url').'/assets/images/brand/logo_with_dark_bg.jpg')" />
<meta property="og:image:type" content="image/jpg" />
<meta property="og:image:alt" content="{{ config('app.name') }}" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:site" content="@TechHubEKSU">
<meta name="twitter:creator" content="@emmanuelJet_">
<meta name="twitter:title" content="@yield('pageTitle', config('app.name'))">
<meta name="twitter:description" content="@yield('pageDescription', 'TechHub EKSU is an innovative community for startups, communities, and creative minds to connect, collaborate and build.')">
<meta name="twitter:image:src" content="@yield('pageImage', config('app.url').'/assets/images/brand/logo_with_dark_bg.jpg')">
<meta name="twitter:image:alt" content="{{ config('app.name') }}">

<!-- Schema -->
@include('includes.schema')