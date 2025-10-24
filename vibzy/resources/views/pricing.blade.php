@extends('layouts.app')

@section('title', 'Pricing - VIBZY')

@section('content')
<!-- Hero -->
<section class="pricing-hero py-5 bg-light text-center">
  <div class="container">
    <h1 class="display-5 fw-bold mb-3">Choose Your Plan</h1>
    <p class="lead text-muted mb-4">Simple pricing for creators of all levels — start free or unlock premium features.</p>
  </div>
</section>

<!-- Pricing Plans -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <!-- Free Plan -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body p-4">
            <h3 class="fw-bold mb-3">Free</h3>
            <p class="text-muted mb-4">Perfect for beginners getting started with streaming.</p>
            <h2 class="fw-bold mb-3">$0<span class="fs-5 text-muted">/mo</span></h2>
            <ul class="list-unstyled text-muted mb-4">
              <li>✅ Basic Overlays</li>
              <li>✅ 1 Stream Platform</li>
              <li>❌ No Analytics</li>
              <li>❌ No Sponsorship Tools</li>
            </ul>
            <form action="{{ route('cart.add') }}" method="POST">
              @csrf
              <input type="hidden" name="plan" value="Free">
              <button type="submit" class="btn btn-outline-dark w-100">Select Free</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Pro Plan -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center">
          <div class="card-body p-4">
            <h3 class="fw-bold mb-3 text-primary">Pro</h3>
            <p class="text-muted mb-4">Grow faster with premium tools and more integrations.</p>
            <h2 class="fw-bold mb-3">$15<span class="fs-5 text-muted">/mo</span></h2>
            <ul class="list-unstyled text-muted mb-4">
              <li>✅ Custom Overlays</li>
              <li>✅ Multistream (3 platforms)</li>
              <li>✅ Sponsorship Tools</li>
              <li>❌ Advanced Analytics</li>
            </ul>
            <form action="{{ route('cart.add') }}" method="POST">
              @csrf
              <input type="hidden" name="plan" value="Pro">
              <button type="submit" class="btn btn-dark w-100">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Ultra Plan -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm h-100 text-center border-success">
          <div class="card-body p-4">
            <h3 class="fw-bold mb-3 text-success">Ultra</h3>
            <p class="text-muted mb-4">The ultimate toolkit for professional streamers.</p>
            <h2 class="fw-bold mb-3">$29<span class="fs-5 text-muted">/mo</span></h2>
            <ul class="list-unstyled text-muted mb-4">
              <li>✅ All Pro Features</li>
              <li>✅ Unlimited Platforms</li>
              <li>✅ Sponsorship Dashboard</li>
              <li>✅ Deep Analytics</li>
            </ul>
            <form action="{{ route('cart.add') }}" method="POST">
              @csrf
              <input type="hidden" name="plan" value="Ultra">
              <button type="submit" class="btn btn-success w-100">Add to Cart</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
