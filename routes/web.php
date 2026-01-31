<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function () {

    // Notice page
    Route::get('/email/verify', function () {
        if (auth()->user()->hasVerifiedEmail()) {
            return redirect()->route('home');
        }
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');

    // Verify link
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect()->route('home');
    })->middleware(['signed'])->name('verification.verify');

    // Resend email
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Link verifikasi sudah dikirim ulang.');
    })->middleware('throttle:6,1')->name('verification.send');
});
Route::middleware(['auth', 'verified'])->group(function () {
    // Account routes
    Route::get('/account', [AuthController::class, 'showAccount'])->name('auth.account');
    Route::get('/account/edit', [AuthController::class, 'showAccountEdit'])->name('auth.account.edit');

    // Seller register routes
    Route::get('/seller/register', [SellerController::class, 'showRegister'])->name('seller.register');
    Route::post('/seller/register/information', [SellerController::class, 'registerStepOne'])->name('seller.register.information');
    Route::post('/seller/register/credentials', [SellerController::class, 'registerStepTwo'])->name('seller.register.credentials');

    Route::prefix('member')->group(function () {
        Route::get('/voucher', function () {
            return view('member.voucher.index');
        })->name('member.voucher');
        Route::get('/order', function () {
            return view('member.order.index');
        })->name('member.order');
        Route::get('/review', function () {
            return view('member.review.index');
        })->name('member.review');
        Route::get('/wishlist', function () {
            return view('member.wishlist.index');
        })->name('member.wishlist');
        Route::get('/address', function () {
            return view('member.address.index');
        })->name('member.address');
        Route::get('/seller-favorites', function () {
            return view('member.seller-favorites.index');
        })->name('member.seller-favorites');
    });
});


Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::get('/profile', [AuthController::class, 'showProfile'])->name('auth.profile');

