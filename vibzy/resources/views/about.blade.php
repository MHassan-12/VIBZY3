@extends('layouts.app')

@section('title', 'About Us - VIBZY')

@section('content')
<!-- Hero Section -->
<section class="about-hero py-5 bg-light text-center">
  <div class="container">
    <h1 class="display-5 fw-bold mb-3">About VIBZY</h1>
    <p class="lead text-muted mb-4">
      Empowering creators to stream, grow, and connect with their audience effortlessly.
    </p>
    <a href="{{ route('register') }}" class="btn btn-dark btn-lg">Join Our Community</a>
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
          Founded with the vision to simplify live streaming for everyone, VIBZY has become a hub
          for creators who want powerful yet intuitive tools. From overlays to analytics, we make
          it easier to focus on what truly matters — creating and connecting.
        </p>
        <p class="text-muted">
          We believe in building a community where innovation, creativity, and collaboration thrive.
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
          <p class="text-muted">We aim to empower creators with tools that make their streaming experience seamless and professional.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4">
          <h4 class="fw-semibold mb-3">Innovation</h4>
          <p class="text-muted">We continuously evolve to bring you the latest technologies in streaming and audience engagement.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm p-4">
          <h4 class="fw-semibold mb-3">Community</h4>
          <p class="text-muted">We believe in growing together — fostering collaboration, creativity, and connection among streamers.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="fw-bold mb-3">Ready to Start Your Journey?</h2>
    <p class="text-muted mb-4">Join thousands of creators already building their brand with VIBZY.</p>
    <a href="{{ route('register') }}" class="btn btn-dark btn-lg">Get Started Now</a>
  </div>
</section>
@endsection
