    <?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\AddOnBilliardController;
use App\Http\Controllers\AddOnController;
use App\Http\Controllers\AssetManagementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CartOrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardServerController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\Home2Controller;
use App\Http\Controllers\Home3Controller;
use App\Http\Controllers\Home4Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListStockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OtherSettingController;
use App\Http\Controllers\ReportAbsensiController;
use App\Http\Controllers\ReportPenjualanController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StockInController;
use App\Http\Controllers\StockOutController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TagController;
use App\Models\Banner;
use App\Models\Home;
use App\Models\Home2;
use App\Models\Home3;
use App\Models\Home4;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data['homes'] = Home::orderby('id', 'asc')->get();
    $data['homes2'] = Home2::orderby('id', 'asc')->get();
    $data['homes3'] = Home3::orderby('id', 'asc')->get();
    $data['homes4'] = Home4::orderby('id', 'asc')->get();

    return view('home.index',$data);
})->name('home');

// About Us
Route::get('/about-us', function () {
    return view('about.index');
})->name('about-us');

// Reservation
Route::get('/reservation', function () {
    return view('reservation.index');
})->name('reservation');

// Gallery
Route::get('/gallery', function () {
    return view('gallery.index');
})->name('gallery');

// Blog
Route::get('/blog', function () {
    return view('blog.index');
})->name('blog');

// Service
Route::get('/service', function () {
    return view('blog.index');
})->name('blog');

// Service Coffee Shop
Route::get('/service/coffee-shop', function () {
    return view('service.coffee-shop');
})->name('service.coffee-shop');

// Service Catering
Route::get('/service/catering', function () {
    return view('service.catering');
})->name('service.catering');

// Service Cleaning Service
Route::get('/service/cleaning-service', function () {
    return view('service.catering');
})->name('service.cleaning');

// Service Parking
Route::get('/service/parking', function () {
    return view('service.parking');
})->name('service.parking');

// Service Security
Route::get('/service/security', function () {
    return view('service.security');
})->name('service.security');

// Service Property
Route::get('/service/property', function () {
    return view('service.property');
})->name('service.property');

    Auth::routes();

    Route::get('/admin/login', function () {
        return view('auth.login');
    });

    Route::middleware('auth:web')->group(function () {
        Route::get('/dashboard', function () {
            $data['page_title'] = 'Banner';

            $data['homes'] = Home::orderby('id', 'asc')->get();
            $data['homes2'] = Home2::orderby('id', 'asc')->get();
            $data['homes3'] = Home3::orderby('id', 'asc')->get();
            $data['homes4'] = Home4::orderby('id', 'asc')->get();

            return view('backend.home.index', $data);
        });

        // Home 1
        Route::resource('/homes', HomeController::class);

        // Home 2
        Route::resource('/homes2', Home2Controller::class);

        // Home 3
        Route::resource('/homes3', Home3Controller::class);

        // Home 4
        Route::resource('/homes4', Home4Controller::class);

    });

