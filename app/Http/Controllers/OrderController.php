<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\order_product;
use App\Models\Subscription;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function user_info(){
        return view('pages.user-order-information');
    }
}
