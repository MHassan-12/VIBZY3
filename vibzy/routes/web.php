<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', fn() => view('home'))->name('home');
Route::get('/home', fn() => view('home'))->name('home');
Route::get('/creator-hub', fn() => view('products'))->name('products');
Route::view('/about', 'about')->name('about');


// Pricing page
Route::view('/pricing', 'pricing')->name('pricing');

// Cart page
Route::view('/cart', 'cart')->name('cart');


Route::view('/checkout', 'checkout')->name('checkout');

Route::post('/checkout/process', function (Request $request) {
    // Normally you'd save order & process payment here.
    session()->forget('cart');
    return redirect()->route('home')->with('success', 'Thank you for your purchase! Your subscription is active.');
})->name('checkout.process');

// Cart actions
Route::post('/cart/add', function (Request $request) {
    $plan = $request->input('plan');
    $prices = [
        'Free' => 0,
        'Pro' => 15,
        'Ultra' => 29,
    ];

    $cart = session('cart', []);
    $cart[$plan] = [
        'plan' => $plan,
        'price' => $prices[$plan] ?? 0,
    ];
    session(['cart' => $cart]);

    return redirect()->route('cart')->with('success', "$plan plan added to cart!");
})->name('cart.add');

Route::delete('/cart/remove/{plan}', function ($plan) {
    $cart = session('cart', []);
    unset($cart[$plan]);
    session(['cart' => $cart]);

    return redirect()->route('cart')->with('success', "$plan plan removed from cart.");
})->name('cart.remove');
