<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\order_product;
use App\Models\Subscription;
use App\Models\User;
use App\Notifications\OrderPlacedNotification;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Filament\Notifications\Notification;

class OrderController extends Controller
{
    public function user_info(){
        return view('pages.user-order-information');
    }

    public function processOrder(Request $request){
        $order = new Order();
        $order->total = Cart::subtotal();
        $order->user_id = auth()->id();
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

        $admin->notify(
            Notification::make()
                ->title('New Order Placed')
                ->toDatabase(),);

        session(['order_id' => $order->id]);
        Cart::destroy();
        return redirect()->route('order_complete');

    }

    public function order_complete(){
        return view('pages.order-complete');
    }

    public function uploadSlip(Request $request)
    {
        $orderId = session('order_id');
        $order = Order::find($orderId);

        if ($order) {
            // Clear any existing uploads for this field, if needed
            $order->clearMediaCollection('bank_slips');
            $order->addMediaFromRequest('file')->toMediaCollection('bank_slips');

            return redirect('/thank-you')->with('success', 'Slip uploaded successfully.');
        } else {
            return response()->json(['success' => false, 'message' => 'Order not found.']);
        }
    }
}
