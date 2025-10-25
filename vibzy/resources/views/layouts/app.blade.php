<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <link rel="icon" type="image/png" href="{{ asset('images/vibzy-logo.png') }}">

  <title>@yield('title', 'VIBZY')</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Your Custom Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}"></head>
<body>

  {{-- Header --}}
  @include('partials.header')

  {{-- Page Content --}}
  <main id="content" class="container" role="main">
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('partials.footer')

  <!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
