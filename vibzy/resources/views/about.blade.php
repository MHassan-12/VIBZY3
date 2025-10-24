@extends('layouts.app')

@section('title', 'About Us - VIBZY')

@section('content')
<!-- Hero Section -->
<section id="gradient2" class="about-hero py-5 bg-light text-center">
  <div class="container">
    <h1 style="color:white" class="display-5 fw-bold mb-3">About VIBZY</h1>
    <p class="lead mb-4">
      Empowering creators and viewers to connect through engaging sports, drama, and entertainment content.
    </p>
    <a href="{{ route('register') }}" style="background:#522424ff; border:none;" class="btn btn-dark btn-lg">Join Our Community</a>
  </div>
</section>

<!-- Our Story -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=80"
             alt="Our Story" class="img-fluid rounded-4 shadow-sm">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold mb-3">Our Story</h2>
        <p class="text-muted">
          VIBZY started with a passion for connecting people through powerful stories — 
          from the thrill of sports to the emotions of drama and the excitement of entertainment.
        </p>
        <p class="text-muted">
          Our mission is simple: to give audiences a space where creativity thrives, 
          stories inspire, and entertainment unites everyone.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Our Mission -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Our Mission & Values</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4">
          <h4 class="fw-semibold mb-3">Empowerment</h4>
          <p class="text-muted">
            We empower creators, athletes, and storytellers to share their vision 
            and connect directly with their audiences.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4">
          <h4 class="fw-semibold mb-3">Innovation</h4>
          <p class="text-muted">
            We innovate constantly — building better tools, experiences, 
            and ways to engage with modern entertainment.
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4">
          <h4 class="fw-semibold mb-3">Community</h4>
          <p class="text-muted">
            VIBZY is more than a platform — it’s a global community where viewers and creators unite through shared passions.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section id="gradient3" class="py-5 text-center">
  <div class="container">
    <h2 class="fw-bold mb-3">Ready to Be Part of VIBZY?</h2>
    <p class="mb-4">Join thousands of fans and creators shaping the future of entertainment.</p>
    <a href="{{ route('register') }}" style="background:#522424ff; border:none;" class="btn btn-dark btn-lg">Get Started Now</a>
  </div>
</section>
@endsection
