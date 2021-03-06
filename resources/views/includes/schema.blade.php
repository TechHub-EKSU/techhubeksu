<script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "LocalBusiness",
    "name" : "@yield('pageTitle',  config('app.name'))",
    "description" : "@yield('pageDescription', 'TechHub EKSU is an innovative community for startups, communities, and creative minds to connect, collaborate and build.')",
    "url" : "{{ url()->current() }}",
    "alternateName" : "{{ config('app.nick') }}",
    "email" : "techhubeksu@gmail.com",
    "image": "@yield('pageImage', config('app.url').'/assets/images/brand/logo_with_dark_bg.jpg')",
    "address" : {
      "@type" : "PostalAddress",
      "streetAddress" : "Sport Complex, Ekiti State University",
      "addressLocality" : "Ado-Ekiti",
      "postalCode" : "360001",
      "addressRegion" : "Ekiti State",
      "addressCountry" : "Nigeria"
    },
    "logo" : "{{ config('app.url') }}/assets/images/brand/logo.png",
    "priceRange" : "₦500 - ₦7,500",
    "paymentAccepted" : "Debit Card",
    "currenciesAccepted" : "NGN",
    "openingHours" : "Mo-Fr 08:00-18:00",
  }
</script>