@extends('layouts.app')

@section('title', 'Checkout - VIBZY')

@section('content')
<section class="checkout py-5">
  <div class="container">
    <h1 class="fw-bold mb-4 text-center">Checkout</h1>

    @if(session('cart') && count(session('cart')) > 0)
      <div class="row g-4">
        <!-- Order Summary -->
        <div class="col-lg-5">
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <h5 class="fw-bold mb-3">Your Order</h5>
              <ul class="list-group list-group-flush mb-3">
                @php $total = 0; @endphp
                @foreach(session('cart') as $item)
                  @php $total += $item['price']; @endphp
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $item['plan'] }} Plan
                    <span>${{ $item['price'] }}/mo</span>
                  </li>
                @endforeach
              </ul>
              <div class="d-flex justify-content-between">
                <strong>Total</strong>
                <strong>${{ $total }}/mo</strong>
              </div>
            </div>
          </div>
        </div>

        <!-- Billing / Payment -->
        <div class="col-lg-7">
          <div class="card border-0 shadow-sm">
            <div class="card-body">
              <h5 class="fw-bold mb-3">Billing Information</h5>
              <form method="POST" action="{{ route('checkout.process') }}">
                @csrf

                <div class="mb-3">
                  <label for="name" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email Address</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                  <label for="address" class="form-label">Billing Address</label>
                  <input type="text" class="form-control" id="address" name="address" required>
                </div>

                <div class="mb-3">
                  <label for="payment" class="form-label">Payment Method</label>
                  <select class="form-select" id="payment" name="payment" required>
                    <option value="" disabled selected>Select a method</option>
                    <option value="credit_card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="crypto">Crypto</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-dark w-100 py-2 mt-2">Complete Purchase</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="text-center py-5">
        <p class="lead text-muted mb-4">Your cart is empty. Add a plan to continue.</p>
        <a href="{{ route('pricing') }}" class="btn btn-dark">Browse Plans</a>
      </div>
    @endif
  </div>
</section>
@endsection
