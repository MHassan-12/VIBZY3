@extends('layouts.app')

@section('title', 'Pricing - VIBZY')

@section('content')
<!-- Hero -->
<section id="gradient4" class="pricing-hero py-5 bg-light text-center">
  <div class="container">
    <h1 class="display-5 fw-bold mb-3">Choose Your Plan</h1>
    <p class="lead mb-4">Simple pricing for creators of all levels — start free or unlock premium features.</p>
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
            <p class="text-muted mb-4">Perfect for casual users who want to explore popular shows & highlights.</p>
            <h2 class="fw-bold mb-3">$0<span class="fs-5 text-muted">/mo</span></h2>
            <ul class="list-unstyled text-muted mb-4">
                <li>✅ Watch highlights & live matches</li>
                <li>✅ Limited dramas & movies</li>
                <li>❌ Ads included</li>
                <li>❌ Standard quality (480p)</li>
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
            <p class="text-muted mb-4">For binge-watchers who love sports, drama & movies.</p>
            <h2 class="fw-bold mb-3">$15<span class="fs-5 text-muted">/mo</span></h2>
            <ul class="list-unstyled text-muted mb-4">
                <li>✅ Unlimited access to all content</li>
                <li>✅ Ad-free HD streaming (1080p)</li>
                <li>✅ Watch on 2 devices</li>
                <li>❌ No offline mode</li>
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
            <p class="text-muted mb-4">The ultimate plan for families who want the full cinematic experience.</p>
            <h2 class="fw-bold mb-3">$29<span class="fs-5 text-muted">/mo</span></h2>
            <ul class="list-unstyled text-muted mb-4">
                <li>✅ Ultra HD 4K streaming</li> 
                <li>✅ Watch on 4 devices</li>
                <li>✅ Offline downloads & profiles</li>
                <li>✅ Exclusive & early access content</li>
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
