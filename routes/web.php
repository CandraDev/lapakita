<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\OrderController;
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


    Route::prefix('member')->name('member.')->group(function () {

        Route::prefix('order')->name('order.')->group(function () {
            Route::get('/', [OrderController::class, 'showIndex'])->name('index');
            Route::get('/waiting', [OrderController::class, 'showWaiting'])->name('waiting');
            Route::get('/process', [OrderController::class, 'showProcess'])->name('process');
            Route::get('/shipping', [OrderController::class, 'showShipping'])->name('shipping');
            Route::get('/received', [OrderController::class, 'showReceived'])->name('received');
            Route::get('/done', [OrderController::class, 'showDone'])->name('done');
        });

        Route::get('/voucher', fn () => view('member.voucher.index'))->name('voucher');
        Route::get('/review', fn () => view('member.review.index'))->name('review');
        Route::get('/wishlist', fn () => view('member.wishlist.index'))->name('wishlist');
        Route::get('/address', fn () => view('member.address.index'))->name('address');
        Route::get('/seller-favorites', fn () => view('member.seller-favorites.index'))->name('seller-favorites');
    });

    Route::prefix('seller')->name('seller.')->group(function () {
        Route::middleware(['store.exists'])->group(function () {
            Route::get('/', [SellerController::class, 'showDashboard'])->name('index');
            // nanti tambahkan route dashboard lain
        });

        Route::prefix('register')->name('register.')->group(function () {
            Route::get('/', [SellerController::class, 'showRegister'])->name('index');
            Route::post('/information', [SellerController::class, 'registerStepOne'])->name('information');
            Route::post('/credentials', [SellerController::class, 'registerStepTwo'])->name('credentials');
        });

    });

});


Route::get('/auth/google', [AuthController::class, 'redirectGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [AuthController::class, 'callback']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('auth.logout');
Route::get('/profile', [AuthController::class, 'showProfile'])->name('auth.profile');

