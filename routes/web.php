<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\hom;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Usercontroller;
use App\Models\meal_plan;
use App\Livewire\PriceCalculator;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('price-calculator',priceCalculator::class);
Route::get('Dashboard',[\App\Http\Controllers\analyticController::class,"analytics"])->name('Dashboard');
Route::post('/store-preference', [\App\Http\Controllers\subscriptionController::class, 'storePreference'])->name('store.preference');
Route::get("/",[homecontroller::class,"index"]);

    /**
     * Administration routes
     */

Route::group(['prefix' => 'admin'], function () {

    /**
     * Authentication routes
     */
    Route::group(['prefix' => 'auth'], function (){

        // user resource route
        Route::resource('users', BaseController::class);

        // roles and permission resource route
        Route::resource('roles', BaseController::class);
        Route::resource('permissions', BaseController::class);



    });

    /**
     * Product routes
     */
    Route::group(['prefix' => 'product'], function () {

        // product resource route
       // Route::resource('products', \App\Http\Controllers\ProductsController::class);

        // product category resource route
        Route::resource('categorys', BaseController::class);

        //Seasonal product resource route
        Route::resource('seasonals', BaseController::class);

    });

    // Support
    Route::resource('supports', BaseController::class);

    /**
     * Analytic routes
     */
    Route::group(['prefix' => 'analytic'], function () {

       //@todo add analytic routes

    });

    /**
     * order routes
     */
    Route::group(['prefix' => 'order'], function () {

        Route::get("Dashboard/order/{id}", [\App\Http\Controllers\OrderController::class, 'order_details']);
    });

    Route::get("Dashboard/subscription", [\App\Http\Controllers\subscriptionController::class, 'All_subscriptions']);


});


/**
 * User routes
 */
Route::group(['prefix' => 'user'], function () {

    Route::get("menu",[\App\Http\Controllers\ProductsController::class,"show_product"]);
    //subscription route

    /**
     * Subscription routes
     */

    Route::group(['prefix' => 'subscription'], function () {

        Route::resource('subscriptions', \App\Http\Controllers\subscriptionController::class);
        Route::get("subscription", function () {return view('pages.subscription');})->name('/subscription');
        Route::get("user-information", function () {return view('pages.info');});
        Route::get("summery", function () {return view('pages.summery');})->name('/summery');
        Route::post("summery", function () {return view('pages.summery');});
        Route::get("select-menu/{preference}", [\App\Http\Controllers\ProductsController::class, "show_dish"]);
        Route::get("order-complete", [\App\Http\Controllers\ProductsController::class, 'order_complete'])->name('/order_complete');;

    });

    /**
     * User Dashboard routes
     */

    Route::get('Dashboard/orders', [\App\Http\Controllers\OrderController::class, "all_orders"])->name('all_orders');
    Route::get('Dashboard/user/orders', [\App\Http\Controllers\OrderController::class, "user_orders"])->name('user_orders');
    Route::get('Dashboard/user/subscription', [\App\Http\Controllers\OrderController::class, "user_subscription"])->name('user_subscription');

});




Route::get('add_to_cart/{id}',[\App\Http\Controllers\ProductsController::class,"addtocart"])->name('add_to_cart');
Route::post('add/{id}',[\App\Http\Controllers\ProductsController::class,"add"])->name('add');
Route::get('cart',[\App\Http\Controllers\ProductsController::class,"cart"])->name('cart');
Route::get('order_checkout',[\App\Http\Controllers\OrderController::class,"order_checkout"])->name('order_checkout');
Route::get('/checkout', [\App\Http\Controllers\Stripecontroller::class, "checkout"])->name('checkout');
Route::post('order_checkout', [\App\Http\Controllers\OrderController::class, "create_order"])->name('create_order');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::resource('products',\App\Http\Controllers\ProductsController::class);
    Route::resource('user', \App\Http\Controllers\Usercontroller::class);




});


// get all the users from the users tabel
Route::middleware(['role:admin'])->get('/dev', function (Request $request) {
    $users = DB::table('users')->get();

//    $products = \App\Models\products::first();
//
//    //create a cart
//    $cart = \App\Models\cart::create([
//        'user_id' => 1,
//        'item_count' => 1,
//        'total' => 0,
//        'tax' => 0,
//        'is_paid' => 1,
//    ]);
//    //add product to cart
//    $cart->products()->attach($products,
//        ['quantity' => 1,
//            'price' => $products->price,
//            'tax' => 0,
//        ]);

//
//    dd($products, $cart);
//    return 'yo dev';
});
