@extends('layouts.app')

@section('title', 'Your Cart - VIBZY')

@section('content')
<section class="cart-section py-5">
  <div class="container">
    <h1 class="fw-bold mb-4 text-center">Your Cart</h1>

    @if(session('cart') && count(session('cart')) > 0)
      <div class="table-responsive mb-4">
        <table class="table align-middle">
          <thead class="table-light">
            <tr>
              <th>Plan</th>
              <th>Price</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach(session('cart') as $item)
              <tr>
                <td>{{ $item['plan'] }}</td>
                <td>${{ $item['price'] }}/mo</td>
                <td>
                  <form action="{{ route('cart.remove', $item['plan']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">Remove</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="text-end">
        <a href="{{ route('pricing') }}" class="btn btn-outline-secondary me-2">Continue Shopping</a>
        <a href="{{ route('checkout') }}" class="btn btn-dark">Proceed to Checkout</a>
      </div>
    @else
      <div class="text-center py-5">
        <p class="lead text-muted mb-4">Your cart is empty.</p>
        <a href="{{ route('pricing') }}" class="btn btn-dark">Browse Plans</a>
      </div>
    @endif
  </div>
</section>
@endsection
