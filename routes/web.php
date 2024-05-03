<?php

use App\Http\Controllers\Admin\AdBannerBottomController;
use App\Http\Controllers\Admin\AdBannerTopController;
use App\Http\Controllers\Admin\AdCategoryController;
use App\Http\Controllers\Admin\AdHomeController;
use App\Http\Controllers\Admin\AdProductController;
use App\Http\Controllers\Admin\AdBlogController;
use App\Http\Controllers\Admin\AdBrandController;
use App\Http\Controllers\Admin\AdCommentController;
use App\Http\Controllers\Admin\AdCouponController;
use App\Http\Controllers\Admin\AdOrderController;
use App\Http\Controllers\Admin\AdSliderController;
use App\Http\Controllers\Admin\AdSocialController;
use App\Http\Controllers\Admin\AdUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\FavoriteController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('authlogin')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'aclogin']);
    Route::get('/register', [AuthController::class, 'viewregister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/quen-mat-khau', [AuthController::class, 'viewquenmk'])->name('quenmk');
    Route::post('/quen-mat-khau', [AuthController::class, 'quenmk']);
    Route::get('/doi-mat-khau/{token}', [AuthController::class, 'viewdoimk'])->name('doimk');
    Route::post('/doi-mat-khau/{token}', [AuthController::class, 'doimk']);
    Route::get('/verify-account/{email}', [AuthController::class, 'verify'])->name('verify');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('shop/{category:slug?}', [ProductController::class, 'index'])->name('shop');
Route::get('shop/{category:slug}/{product:slug}', [ProductController::class, 'show'])->name('detail');
Route::post('/comment/{product}', [ProductController::class, 'comment'])->name('comment');
Route::get('/delete/{comment}', [ProductController::class, 'deleteComment'])->name('comment.delete');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'contact']);

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{blog:slug}', [BlogController::class,'show'])->name('blog.detail');

Route::middleware('cus')->group(function () {

    Route::prefix('shopping-cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/add/{product}', [CartController::class, 'add'])->name('add');
        Route::get('/update/{product}', [CartController::class, 'update'])->name('update');
        Route::get('/delete/{product}', [CartController::class, 'delete'])->name('delete');
        Route::post('/apply-coupon', [CartController::class, 'applyCoupon'])->name('apply_coupon');
    });
    
    Route::prefix('favorite')->name('favorite.')->group(function () {
        Route::get('/', [FavoriteController::class, 'index'])->name('index');
        Route::get('/add/{product}', [FavoriteController::class, 'add'])->name('add');
        Route::get('/delete/{product}', [FavoriteController::class, 'delete'])->name('delete');
    });

    Route::prefix('account')->name('account.')->group(function () {
        Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
        Route::get('/hoa-don', [ProfileController::class, 'hoadon'])->name('hoadon');
        Route::get('/hoa-don/{order}', [ProfileController::class, 'showhoadon'])->name('showhoadon');
        Route::get('/cap-nhat-tai-khoan', [ProfileController::class, 'update'])->name('update');
        Route::post('/cap-nhat-tai-khoan', [ProfileController::class, 'check_update']);
        Route::get('/doi-mat-khau', [ProfileController::class, 'updatePass'])->name('updatePass');
        Route::post('/doi-mat-khau', [ProfileController::class, 'check_updatePass']);
    });

    Route::prefix('checkout')->name('checkout.')->group(function () {
        Route::get('/', [CheckoutController::class, 'index'])->name('index');
        Route::get('/verify/{token}', [CheckoutController::class, 'verify'])->name('verify');
        Route::post('/', [CheckoutController::class, 'checkout']);
    });
});

Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdHomeController::class, 'admin'])->name('home');
    Route::resource('category', AdCategoryController::class);
    Route::resource('brands', AdBrandController::class);
    Route::resource('users', AdUserController::class);
    Route::resource('blog', AdBlogController::class);
    Route::resource('products', AdProductController::class);
    Route::resource('coupons', AdCouponController::class);
    Route::resource('comments', AdCommentController::class);
    Route::resource('sliders', AdSliderController::class);
    Route::resource('banner-top', AdBannerTopController::class);
    Route::resource('banner-bottom', AdBannerBottomController::class);
    Route::resource('social-network', AdSocialController::class);
    Route::get('/orders/chua-xac-nhan', [AdOrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/da-xac-nhan', [AdOrderController::class, 'index1'])->name('orders.index1');
    Route::get('/orders/dang-giao-hang', [AdOrderController::class, 'index2'])->name('orders.index2');
    Route::get('/orders/da-thanh-toan', [AdOrderController::class, 'index3'])->name('orders.index3');
    Route::get('/orders/da-huy', [AdOrderController::class, 'index4'])->name('orders.index4');
    Route::get('/orders/{order}/edit', [AdOrderController::class, 'edit'])->name('orders.edit');
    Route::put('/orders/{order}', [AdOrderController::class, 'update'])->name('orders.update');
    Route::delete('/orders/{order}', [AdOrderController::class, 'destroy'])->name('orders.destroy');

});
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['prefix' => 'laravel-filemanager', 'middleware'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
