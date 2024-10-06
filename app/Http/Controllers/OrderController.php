<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\order_product;
use App\Models\Subscription;
use Illuminate\Http\Request;
class OrderController extends Controller
{

    public function create_order(Request $request){
        $save = new Order();
        $save->user_id = auth()->id();

        $save->billing_first_name = request('fname');
        $save->billing_last_name = request('lname');
        $save->billing_post_code = request('zip');
        $save->billing_address = request('address');
        $save->billing_city = request('city');
        $save->billing_mobile = request('phone');
        $save->email = request('email');
        $save->total = session('total');

        $save->save();

        session(['order_id' => $save->id]);

        return redirect(url('/checkout'));
    }
    public function order_checkout(){
        return view('pages.checkout');
    }

    public function all_orders(){
        $orders['orders'] = Order::all();
        return view('admin.Order.order',$orders);
    }

    public function user_orders(){
        $orders['orders'] = Order::where('user_id',auth()->id())->get();
        return view('user.order.order',$orders);
    }

    public function user_subscription(){
        $subs['subscriptions'] = Subscription::where('user_id',auth()->id())->get();
        return view('user.subscription.subscription',$subs);
    }

    public function order_details($id){
        $order = Order::with('products')->findOrFail($id);
       // $order['order'] = Order::find($id);
       // return dd($order);
        return view('admin.Order.view_order',compact('order'));
    }
}
