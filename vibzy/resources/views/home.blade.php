@extends('layouts.app')

@section('title', 'Home - VIBZY')

@section('content')

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>VIBYZ</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

  <!-- Main content -->
  <main id="content" class="container" role="main">

    <!-- Hero -->
    <section class="hero" aria-label="Hero section">
      <div>
        <div class="eyebrow">Video Streaming Platform</div>
        <h1>The easiest way to stream, record & grow</h1>
        <p class="lead">All the tools creators need to go live: alerts, overlays, multistream and more — built for Twitch, YouTube and socials.</p>
        <div class="cta-row">
          <a class="btn" id="get-started" href="#get-started">Get started</a>
          <a class="btn btn--ghost" href="#learn-more">See features</a>
        </div>
      </div>

      <div class="hero-figure" aria-hidden="true">
        <!-- <div style="text-align:center">
          <strong>Hero visual</strong>
        </div> -->
      </div>
    </section>

    <!-- Features grid -->
    <section id="features" class="features" aria-label="Features">
    <div class="feature-grid">
      
      <a href="#" class="feature-card" style="background-image: url('https://cdn-media.theathletic.com/cdn-cgi/image/width=1200,height=675,fit=cover/ThW0ckyZkxCn_Mg75i3Znkzw9_1440x960.jpg');">
        <div class="overlay"></div>
        <div class="feature-content">
          <h3>Sports</h3>
          <p>Watch live cricket, football, kickboxing and other sports live.</p>
        </div>
      </a>

      <a href="#" class="feature-card" style="background-image: url('https://upload.wikimedia.org/wikipedia/en/thumb/0/0a/Humsafar.png/270px-Humsafar.png');">
        <div class="overlay"></div>
        <div class="feature-content">
          <h3>Drama</h3>
          <p>Watch trending dramas, thrillers, and heartfelt series that keep you hooked.</p>
        </div>
      </a>

      <a href="#" class="feature-card" style="background-image: url('https://cdn.britannica.com/15/181115-050-13EF0AFB/Matthew-McConaughey-Interstellar-Christopher-Nolan.jpg');">
        <div class="overlay"></div>
        <div class="feature-content">
          <h3>Movies</h3>
          <p>Discover blockbuster hits, indie gems, and timeless classics — anytime, anywhere.</p>
        </div>
      </a>

      <a href="#" class="feature-card" style="background-image: url('https://www.shutterstock.com/image-vector/abstract-premium-posters-holidays-festivals-260nw-2438225951.jpg');">
        <div class="overlay"></div>
        <div class="feature-content">
          <h3>Viral Content</h3>
          <p>Stay updated with the latest internet sensations and trends.</p>
        </div>
      </a>

      <a href="#" class="feature-card" style="background-image: url('https://wallpapers.com/images/hd/modern-family-dvd-poster-cover-qlhbavon5k0kmbhn.jpg');">
        <div class="overlay"></div>
        <div class="feature-content">
          <h3>Comedy</h3>
          <p>Laugh out loud with hilarious sitcoms and sketches in HD.</p>
        </div>
      </a>

      <a href="#" class="feature-card" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/709/903/649/nasdaq-stock-market-new-york-hd-wallpaper-preview.jpg');">
        <div class="overlay"></div>
        <div class="feature-content">
          <h3>News</h3>
          <p>Get real-time updates on sports, entertainment, and world events.</p>
        </div>
      </a>

    </div>
  
</section>

    </section>

    <!-- Call to action bar -->
    <section class="cta-bar" aria-label="Call to action">
      <div class="container cta-inner">
        <div>
          <strong style="color:white">Ready to go live?</strong>
          <div style="color:#ed918c" class="muted">Download the desktop app or try it in-browser.</div>
        </div>
        <div style="display:flex;gap:12px;">
          <a class="btn" style="background:#522424ff;" href="#download">Download</a>
          <a class="btn btn--ghost" href="#ultra">Try Ultra</a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer
  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <strong>VIBZY</strong>
          <div class="muted">© {{ date('Y') }} VIBZY, Inc.</div>
        </div>
        <div class="footer-col">
          <nav aria-label="footer links">
            <ul style="display:flex;gap:12px;list-style:none">
              <li><a class="muted" href="#privacy">Privacy</a></li>
              <li><a class="muted" href="#terms">Terms</a></li>
              <li><a class="muted" href="#support">Support</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer> -->

  
</body>
</html>

@endsection