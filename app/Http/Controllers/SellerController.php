<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function showRegister() {
        $user = auth()->user();

        // 1️⃣ User BELUM punya store
        if (!$user->store) {
            return view('seller.register.information');
        }

        $store = $user->store;

        // 2️⃣ Punya store tapi BELUM punya credential
        if (!$store->credential) {
            return view('seller.register.credentials');
        }

        // 3️⃣ Punya store + credential tapi BELUM diverifikasi
        if (is_null($store->store_verified_at)) {
            return view('seller.register.verify');
        }

        // 4️⃣ Semua sudah lengkap & verified
        return view('seller.register.success');
    }

    public function registerStepOne(Request $request) {
        dd($request->all());
    }

}
