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
        <div class="feature">
          <h3>Sports</h3>
          <p class="muted">Watch live cricket, football, kickboxing and other sports live.</p>
        </div>
        <div class="feature">
          <h3>Drama</h3>
          <p class="muted">Watch trending dramas, intense thrillers, and heartfelt series from creators who know how to keep you on the edge of your seat..</p>
        </div>
        <div class="feature">
          <h3>Movies</h3>
          <p class="muted">Discover blockbuster hits, indie gems, and classic favorites in HD, anytime, anywhere.</p>
        </div>
        <div class="feature">
          <h3>Viral content</h3>
          <p class="muted">Stay up-to-date about the latest trends.</p>
        </div>
        <div class="feature">
          <h3>Comedy</h3>
          <p class="muted">Watch hilarious sitcoms in HD.</p>
        </div>
        <div class="feature">
          <h3>News</h3>
          <p class="muted">Get real-time updates on sports, entertainment, and world events trusted coverage from VIBZY.</p>
        </div>
      </div>
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