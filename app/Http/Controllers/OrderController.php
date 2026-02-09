<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showIndex(){
        return view('member.order.index');
    }

    public function showWaiting(){
        return view('member.order.waiting');
    }

    public function showProcess(){
        return view('member.order.process');
    }

    public function showShipping(){
        return view('member.order.shipping');
    }

    public function showReceived(){
        return view('member.order.received');
    }

    public function showDone(){
        return view('member.order.done');
    }
}
