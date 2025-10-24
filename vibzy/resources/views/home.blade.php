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
          <a class="btn" href="#get-started">Get started</a>
          <a class="btn btn--ghost" href="#learn-more">See features</a>
        </div>
      </div>

      <div class="hero-figure" aria-hidden="true">
        <div style="text-align:center">
          <strong>Hero visual</strong>
        </div>
      </div>
    </section>

    <!-- Features grid -->
    <section id="features" class="features" aria-label="Features">
      <div class="feature-grid">
        <div class="feature">
          <h3>Alerts & Widgets</h3>
          <p class="muted">Customizable overlays and real-time notifications for your stream.</p>
        </div>
        <div class="feature">
          <h3>Multistream</h3>
          <p class="muted">Broadcast to multiple platforms simultaneously.</p>
        </div>
        <div class="feature">
          <h3>Editor & Clips</h3>
          <p class="muted">Create highlight clips and edit your content fast.</p>
        </div>
        <div class="feature">
          <h3>Sponsorships</h3>
          <p class="muted">Monetize your content with brand deals.</p>
        </div>
        <div class="feature">
          <h3>Payments & Merch</h3>
          <p class="muted">Accept donations and sell merch easily.</p>
        </div>
        <div class="feature">
          <h3>Analytics</h3>
          <p class="muted">Understand your audience with simple reporting.</p>
        </div>
      </div>
    </section>

    <!-- Call to action bar -->
    <section class="cta-bar" aria-label="Call to action">
      <div class="container cta-inner">
        <div>
          <strong>Ready to go live?</strong>
          <div class="muted">Download the desktop app or try it in-browser.</div>
        </div>
        <div style="display:flex;gap:12px;">
          <a class="btn" href="#download">Download</a>
          <a class="btn btn--ghost" href="#ultra">Try Ultra</a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
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
  </footer>

  <!-- Cookie notice -->
  <div class="cookie-notice" role="dialog" aria-live="polite" aria-label="Cookie notice">
    <div style="flex:1;min-width:0">
      <div><strong>We use cookies</strong></div>
      <div class="muted" style="font-size:13px">To improve your experience. Learn more in our privacy policy.</div>
    </div>
    <div style="display:flex;gap:8px;align-items:center">
      <a class="btn btn--ghost" href="#settings">Manage</a>
      <a class="btn" href="#accept">Accept</a>
    </div>
  </div>

</body>
</html>

@endsection