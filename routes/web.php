<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderController;
use App\Models\Schedule;

use Illuminate\Http\Request;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Usercontroller;

use App\Livewire\PriceCalculator;
use Spatie\Sitemap\Tags\Url;


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


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\WorkoutLog;
use Spatie\Sitemap\Sitemap;


// Override the default login route
//Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/subscribe', [\App\Http\Controllers\PushNotificationController::class, 'subscribe'])->name('subscribe');

//Route::post('/save-subscription', function (Request $request) {
//    $request->user()->updatePushSubscription(
//        $request->endpoint,
//        $request->keys['p256dh'],
//        $request->keys['auth']
//    );
//
//    return response()->json(['success' => true]);
//});


Route::post('/save-subscription', function (Request $request) {
    $user = $request->user();

    if (!$user) {
        return response()->json(['error' => 'User not authenticated'], 401);
    }

    \Log::info('Saving subscription for user', ['user_id' => $user->id, 'payload' => $request->all()]);

    try {
        $user->updatePushSubscription(
            $request->endpoint,
            $request->keys['p256dh'],
            $request->keys['auth']
        );

        \Log::info('Subscription saved successfully');
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        \Log::error('Failed to save subscription: ' . $e->getMessage());
        return response()->json(['error' => 'Failed to save subscription'],);
        }
});



Route::get('/sitemap', function () {
    $sitemap = Sitemap::create();

    // Add static URLs
    $sitemap->add(Url::create('/'));
    $sitemap->add(Url::create('/products'));
    $sitemap->add(Url::create('/gallery'));

    // Add product URLs dynamically
    $products = App\Models\product::all();
    foreach ($products as $product) {
        $sitemap->add(Url::create("/product/{$product->name}")
            ->setLastModificationDate($product->updated_at)
            ->setPriority(0.9));
    }

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return response()->file(public_path('sitemap.xml'));
});

Route::get('price-calculator',priceCalculator::class);
Route::get('Dashboard',[\App\Http\Controllers\analyticController::class,"analytics"])->name('Dashboard');
Route::post('/store-preference', [\App\Http\Controllers\subscriptionController::class, 'storePreference'])->name('store.preference');
Route::get("/",[homecontroller::class,"index"]);

Route::post('upload-slip', [OrderController::class, 'uploadSlip'])->name('upload.slip');

Route::get('/thank-you', function () {
    return view('pages.thank-you-page'); // Replace 'thank-you' with the actual view name of the thank you page
})->name('thank.you');

Route::get('/thank-you-cod', function () {
    return view('pages.thank-you-cod-page'); // Replace 'thank-you' with the actual view name of the thank you page
})->name('thank.you.cod');

Route::get('product',[\App\Http\Controllers\ProductsController::class,"index"]);

Route::post('/checkout/process', [OrderController::class, 'processOrder'])->name('checkout.process');

Route::get('order/user-info',[\App\Http\Controllers\OrderController::class,"user_info"]);

Route::get('/schedules/{schedule}', function (Schedule $schedule) {
    return view('filament.custom-schedule-view', compact('schedule'));
})->name('filament.resources.schedules.view');


// Booking from the home page
Route::resource('bookings', BookingController::class);

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
        Route::get("order-complete", [\App\Http\Controllers\OrderController::class, 'order_complete'])->name('order_complete');;

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

// New Cart
Route::post('/',[\App\Http\Controllers\Cartcontroller::class, 'store'])->name('cart.store');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::resource('products',\App\Http\Controllers\ProductsController::class);
//    Route::resource('user', \App\Http\Controllers\Usercontroller::class);




});


// get all the users from the users tabel
// Route::middleware(['role:admin'])->get('/dev', function (Request $request) {
//     $users = DB::table('users')->get();

// //    $products = \App\Models\products::first();
// //
// //    //create a cart
// //    $cart = \App\Models\cart::create([
// //        'user_id' => 1,
// //        'item_count' => 1,
// //        'total' => 0,
// //        'tax' => 0,
// //        'is_paid' => 1,
// //    ]);
// //    //add product to cart
// //    $cart->products()->attach($products,
// //        ['quantity' => 1,
// //            'price' => $products->price,
// //            'tax' => 0,
// //        ]);

// //
// //    dd($products, $cart);
// //    return 'yo dev';
// });

Route::get('/schedules/{schedule}', function (Schedule $schedule) {
    // Load related data like workouts and exercises if needed
    $schedule->load('workouts.exercises');

    // Return the Blade view with the schedule data
    return view('schedules.show', ['schedule' => $schedule]);
})->name('schedules.show');

// Route::get('/workoutlogs/{workoutlog}', function (WorkoutLog $workoutlog) {
//     // Load related data like workouts and exercises if needed
//     $workoutlog->load('workout_logs.exercise_logs');

//     // Return the Blade view with the workoutl data
//     return view('workoutlog.show', ['workoutlog' => $workoutlog]);
// })->name('workoutlog.show');

Route::get('/workout-log/{id}', function ($id) {
    $workoutLog = WorkoutLog::with(['exerciseLogs.setLogs'])->findOrFail($id);

    return view('workoutlog.show', ['workoutLog' => $workoutLog]);
})->name('workout-log.show');
