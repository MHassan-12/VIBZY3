<!-- Top promotional banner -->
<div class="top-banner" role="region" aria-label="Top announcement">
  <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-white py-2">
    <div class="banner-text text-center text-md-start">
      <strong>BIG NEWS</strong> — You have found your favourite platform. Earn money by watching.
    </div>
    <div class="banner-action mt-2 mt-md-0 fw-semibold text-accent" style="cursor:pointer;">Learn more →</div>
  </div>
</div>

<!-- Header / navigation -->
<header class="site-header bg-white py-3" role="banner">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center fw-bold" href="{{ route('home') }}">
        <svg width="34" height="34" viewBox="0 0 34 34" aria-hidden="true" class="me-2">
          <rect width="34" height="34" rx="6" fill="#522424ff"></rect>
        </svg>
        <span>VIBZY</span>
      </a>

      <!-- Mobile Toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
              aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse" id="navbarMain">
        <!-- Navigation Links -->
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 site-nav">
          <li class="nav-item"><a style="margin-left=230px;"class="nav-link" href="{{ route('home') }}">Home</a></li>
          <li class="mx-2 nav-item"><a class="nav-link" href="{{ route('products') }}">Creator-Hub</a></li>
          <li class="mx-2 nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
          <li class="mx-2 nav-item"><a class="nav-link" href="{{ route('pricing') }}">Pricing</a></li>
        </ul>

        <!-- Auth Buttons + Cart -->
        <div class="header-cta d-flex align-items-center gap-3 mt-3 mt-lg-0">
          <!-- Cart Icon -->
          <a href="{{ route('cart') }}" class="position-relative">
            <i class="bi bi-cart3 fs-4 text-dark"></i>
            @if(session('cart') && count(session('cart')) > 0)
              <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ count(session('cart')) }}
              </span>
            @endif
          </a>

          <!-- Auth Dropdown -->
          @auth
            <div class="dropdown">
              <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name ?? 'Dashboard' }}
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li>
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">Log out</button>
                  </form>
                </li>
              </ul>
            </div>
          @else
            <a href="{{ route('login') }}" id="btn-outline-dark" class="btn btn-outline-dark">Log in</a>
            <a href="{{ route('register') }}" id="btn-dark" class="btn btn-dark">Sign up</a>
          @endauth
        </div>
      </div>
    </div>
  </nav>
</header>
