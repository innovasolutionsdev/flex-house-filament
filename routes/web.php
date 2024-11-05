<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\OrderController;
use App\Models\Schedule;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\homecontroller;
use App\Http\Controllers\Usercontroller;

use App\Livewire\PriceCalculator;
use Spatie\Sitemap\Tags\Url;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\WorkoutLog;
use Spatie\Sitemap\Sitemap;

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




// Default route
Route::get("/",[homecontroller::class,"index"]);


// Booking from the home page
Route::resource('bookings', BookingController::class);


// Add to cart and product order routes

Route::resource('products',\App\Http\Controllers\ProductsController::class);
Route::get('cart',[\App\Http\Controllers\ProductsController::class,"cart"])->name('cart');
Route::post('/checkout/process', [OrderController::class, 'processOrder'])->name('checkout.process');
Route::get('order/user-info',[\App\Http\Controllers\OrderController::class,"user_info"]);
Route::post('/',[\App\Http\Controllers\Cartcontroller::class, 'store'])->name('cart.store');
Route::post('upload-slip', [OrderController::class, 'uploadSlip'])->name('upload.slip');
Route::get('/thank-you', function () {
    return view('pages.thank-you-page');
})->name('thank.you');

Route::get('/thank-you-cod', function () {
    return view('pages.thank-you-cod-page');
})->name('thank.you.cod');



//Dashboard routes

Route::get('/workout-log/{id}', function ($id) {
    $workoutLog = WorkoutLog::with(['exerciseLogs.setLogs'])->findOrFail($id);

    return view('workoutlog.show', ['workoutLog' => $workoutLog]);
})->name('workout-log.show');

Route::get('/schedules/{schedule}', function (Schedule $schedule) {
    return view('filament.custom-schedule-view', compact('schedule'));
})->name('filament.resources.schedules.view');

Route::get('/schedules/{schedule}', function (Schedule $schedule) {
    // Load related data like workouts and exercises if needed
    $schedule->load('workouts.exercises');

    // Return the Blade view with the schedule data
    return view('schedules.show', ['schedule' => $schedule]);
})->name('schedules.show');


// Creating a sitemap

Route::post('save-push-notification-sub', [\App\Http\Controllers\PushNotificationController::class, 'saveSubscription']);

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
});
//route for D:\Innova Solutions\flex-house-filament\resources\views\pages\blog-details.blade.php
Route::get('/blog-details', function () {
    return view('pages.blog-details');
})->name('blog.details');