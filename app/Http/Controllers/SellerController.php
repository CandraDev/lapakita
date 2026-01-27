<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function showRegister(){
        return view('seller.register.information');
    }
    public function showRegister2(){
        return view('seller.register.credentials');
    }
    public function showRegister3(){
        return view('seller.register.verify');
    }
    public function showRegister4(){
        return view('seller.register.success');
    }
}
