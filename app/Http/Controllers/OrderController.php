<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\order_product;
use App\Models\Subscription;
use App\Models\User;
use App\Notifications\OrderPlacedNotification;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function user_info(){
        return view('pages.user-order-information');
    }

    public function processOrder(Request $request){
        $order = new Order();
        $order->total = Cart::subtotal();
        $order->item_count = 0;
        $order->email = $request->email;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->zip = $request->zip;
        $order->state = $request->state;
        $order->phone = $request->phone;
        $order->notes = $request->note;
        $order->save();



        $admin = User::where('role', 1)->first();  // Or get the admin(s) another way
        $admin->notify(new OrderPlacedNotification($order));
        Cart::destroy();
        return redirect()->route('order_complete');

    }

    public function order_complete(){
        return view('pages.order-complete');
    }
}
