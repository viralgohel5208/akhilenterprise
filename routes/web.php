<?php

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

Route::get('/optimize-cache', function() {
    Artisan::call('optimize:clear');    
    return 'Application cache has been cleared';
});
//optimize cache:

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});
//Clear config cache:

Route::get('/config-cache', function() {
  Artisan::call('config:cache');
  return 'Config cache has been cleared';
}); 
// Clear view cache:

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

Route::get('/config-clear', function() {
  Artisan::call('config:clear');
  return 'Config cache has been cleared';
}); 
//Clear config cache:


Route::get('/enterprise-admin',[App\Http\Controllers\Auth\LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/enterprise-admin/login',[App\Http\Controllers\Auth\LoginController::class,'adminLogin'])->name('admin.login');
Route::get('/enterprise-admin/register',[App\Http\Controllers\Auth\RegisterController::class,'showRegisterForm'])->name('register-view');
Route::post('/enterprise-admin/register',[App\Http\Controllers\Auth\RegisterController::class,'registerFormData'])->name('register');
Route::get('/enterprise-admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/enterprise-admin/forgotpassword', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('admin.forgotpassword');
Route::post('/enterprise-admin/forgotpassword', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('admin.forgotpassword.post'); 
Route::get('/enterprise-admin/reset-password/{token}', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetPasswordForm'])->name('admin.resetPassword');
Route::post('/enterprise-admin/reset-password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('admin.resetPassword.post');

Route::group(['prefix' => 'enterprise-admin', 'middleware' => 'role.redirect'], function () {
    Route::get('/dashboard', [App\Http\Controllers\admin\HomeController::class, 'dashboard'])->name('enterprise-admin.dashboard');
    Route::get('/my-profile', [App\Http\Controllers\admin\HomeController::class, 'myProfile'])->name('enterprise-admin.myProfile');
    Route::post('/my-profile', [App\Http\Controllers\admin\HomeController::class, 'myProfileStore'])->name('enterprise-admin.myProfile.store');
    Route::post('/change-password', [App\Http\Controllers\admin\HomeController::class, 'changePassword'])->name('enterprise-admin.changePassword');

    // Contact
    Route::get('/contact-inquiry', [App\Http\Controllers\RequestCatalogController::class, 'index'])->name('enterprise-admin.cataloglist');

    // Header
    Route::get('/header', [App\Http\Controllers\admin\HeaderController::class, 'headerRecords'])->name('enterprise-admin.headerData');
    Route::post('/header', [App\Http\Controllers\admin\HeaderController::class, 'headerRecordsSave'])->name('enterprise-admin.headerDataSave');

    // Footer
    Route::get('/footer', [App\Http\Controllers\admin\FooterController::class, 'footerRecords'])->name('enterprise-admin.footerData');
    Route::post('/footer', [App\Http\Controllers\admin\FooterController::class, 'footerRecordsSave'])->name('enterprise-admin.footerDataSave');

    // General Settings
    Route::get('/settings', [App\Http\Controllers\admin\GeneralSettingsController::class, 'settingsView'])->name('enterprise-admin.settings');
    Route::post('/settings', [App\Http\Controllers\admin\GeneralSettingsController::class, 'settingsStore'])->name('enterprise-admin.settings.store');

    // Product Category
    Route::get('/product-category', [App\Http\Controllers\admin\ProductCategoryController::class, 'index'])->name('enterprise-admin.pro-cat');
    Route::get('/product-category/add', [App\Http\Controllers\admin\ProductCategoryController::class, 'storeForm'])->name('enterprise-admin.pro-cat.storeview');
    Route::post('/product-category/add', [App\Http\Controllers\admin\ProductCategoryController::class, 'store'])->name('enterprise-admin.pro-cat.store');
    Route::get('/product-category/edit/{id}', [App\Http\Controllers\admin\ProductCategoryController::class, 'editForm'])->name('enterprise-admin.pro-cat.edit');
    Route::post('/product-category/update', [App\Http\Controllers\admin\ProductCategoryController::class, 'update'])->name('enterprise-admin.pro-cat.update');
    Route::get('/product-category/delete/{id}', [App\Http\Controllers\admin\ProductCategoryController::class, 'delete'])->name('enterprise-admin.pro-cat.delete');

    // Products
    Route::get('/product', [App\Http\Controllers\admin\ProductsController::class, 'index'])->name('enterprise-admin.product');
    Route::get('/product/add', [App\Http\Controllers\admin\ProductsController::class, 'storeForm'])->name('enterprise-admin.product.add');
    Route::post('/product/add', [App\Http\Controllers\admin\ProductsController::class, 'storeData'])->name('enterprise-admin.product.store');
    Route::get('/product/edit/{id}', [App\Http\Controllers\admin\ProductsController::class, 'editRecord'])->name('enterprise-admin.product.edit');
    Route::post('/product/update', [App\Http\Controllers\admin\ProductsController::class, 'updateRecord'])->name('enterprise-admin.product.update');
    Route::get('/product/delete/{id}', [App\Http\Controllers\admin\ProductsController::class, 'deleteRecord'])->name('enterprise-admin.product.delete');
    Route::post('/product/remove/{id}', [App\Http\Controllers\admin\ProductsController::class, 'removeImage'])->name('enterprise-admin.product.removeImage');
    Route::post('/product/removeGallery/{id}', [App\Http\Controllers\admin\ProductsController::class, 'removeGalleryImage'])->name('enterprise-admin.product.removeGallery');

    // Homeslider
    Route::get('/home-slider', [App\Http\Controllers\admin\HomeSliderController::class, 'index'])->name('enterprise-admin.homesldier');
    Route::get('/home-slider/add', [App\Http\Controllers\admin\HomeSliderController::class, 'create'])->name('enterprise-admin.homesldier.add');
    Route::post('/home-slider/add', [App\Http\Controllers\admin\HomeSliderController::class, 'storeData'])->name('enterprise-admin.homesldier.store');
    Route::get('/home-slider/edit/{id}', [App\Http\Controllers\admin\HomeSliderController::class, 'editRecord'])->name('enterprise-admin.homesldier.edit');
    Route::post('/home-slider/update', [App\Http\Controllers\admin\HomeSliderController::class, 'updateRecord'])->name('enterprise-admin.homesldier.update');
    Route::post('/home-slider/delete/{id}', [App\Http\Controllers\admin\HomeSliderController::class, 'deleteRecord'])->name('enterprise-admin.homesldier.delete');

    // Infrastructure
    Route::get('/infrastructure', [App\Http\Controllers\admin\InfrastructureController::class, 'index'])->name('enterprise-admin.infrastructure');
    Route::get('/infrastructure/add', [App\Http\Controllers\admin\InfrastructureController::class, 'create'])->name('enterprise-admin.infrastructure.add');
    Route::post('/infrastructure/add', [App\Http\Controllers\admin\InfrastructureController::class, 'storeData'])->name('enterprise-admin.infrastructure.store');
    Route::get('/infrastructure/edit/{id}', [App\Http\Controllers\admin\InfrastructureController::class, 'editRecord'])->name('enterprise-admin.infrastructure.edit');
    Route::post('/infrastructure/update', [App\Http\Controllers\admin\InfrastructureController::class, 'updateRecord'])->name('enterprise-admin.infrastructure.update');
    Route::post('/infrastructure/delete/{id}', [App\Http\Controllers\admin\InfrastructureController::class, 'deleteRecord'])->name('enterprise-admin.infrastructure.delete');

    // CoreValues
    Route::get('/corevalue', [App\Http\Controllers\admin\CoreValuesController::class, 'index'])->name('enterprise-admin.corevalue');
    Route::get('/corevalue/add', [App\Http\Controllers\admin\CoreValuesController::class, 'create'])->name('enterprise-admin.corevalue.add');
    Route::post('/corevalue/add', [App\Http\Controllers\admin\CoreValuesController::class, 'storeData'])->name('enterprise-admin.corevalue.store');
    Route::get('/corevalue/edit/{id}', [App\Http\Controllers\admin\CoreValuesController::class, 'editRecord'])->name('enterprise-admin.corevalue.edit');
    Route::post('/corevalue/update', [App\Http\Controllers\admin\CoreValuesController::class, 'updateRecord'])->name('enterprise-admin.corevalue.update');
    Route::post('/corevalue/delete/{id}', [App\Http\Controllers\admin\CoreValuesController::class, 'delete'])->name('enterprise-admin.corevalue.delete');

    // Certificates
    Route::get('/certificate', [App\Http\Controllers\admin\CertificatesController::class, 'index'])->name('enterprise-admin.certificate');
    Route::get('/certificate/add', [App\Http\Controllers\admin\CertificatesController::class, 'create'])->name('enterprise-admin.certificate.add');
    Route::post('/certificate/add', [App\Http\Controllers\admin\CertificatesController::class, 'storeData'])->name('enterprise-admin.certificate.store');
    Route::get('/certificate/edit/{id}', [App\Http\Controllers\admin\CertificatesController::class, 'editRecord'])->name('enterprise-admin.certificate.edit');
    Route::post('/certificate/update', [App\Http\Controllers\admin\CertificatesController::class, 'updateRecord'])->name('enterprise-admin.certificate.update');
    Route::post('/certificate/delete/{id}', [App\Http\Controllers\admin\CertificatesController::class, 'delete'])->name('enterprise-admin.certificate.delete');

    // Quality
    Route::get('/quality/add', [App\Http\Controllers\admin\QualityController::class, 'create'])->name('enterprise-admin.quality.add');
    Route::post('/quality/add', [App\Http\Controllers\admin\QualityController::class, 'storeData'])->name('enterprise-admin.quality.store');

    // Home
    Route::get('/home/add', [App\Http\Controllers\admin\HomeController::class, 'homeCreate'])->name('enterprise-admin.home.add');
    Route::post('/home/add', [App\Http\Controllers\admin\HomeController::class, 'homeStoreData'])->name('enterprise-admin.home.store');

    Route::get('/about/add', [App\Http\Controllers\admin\AboutUsController::class, 'create'])->name('enterprise-admin.about.add');
    Route::post('/about/add', [App\Http\Controllers\admin\AboutUsController::class, 'storeData'])->name('enterprise-admin.about.store');

    // CommonPage
    Route::get('/page', [App\Http\Controllers\admin\HomeController::class, 'pageIndex'])->name('enterprise-admin.page');
    Route::get('/page/edit/{id}', [App\Http\Controllers\admin\HomeController::class, 'editPageRecord'])->name('enterprise-admin.page.edit');
    Route::post('/page/update', [App\Http\Controllers\admin\HomeController::class, 'updatePageRecord'])->name('enterprise-admin.page.update');
});


// Front Page
Route::get('/', function () {
    return view('home');
});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about-us', [App\Http\Controllers\HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/quality', [App\Http\Controllers\HomeController::class, 'qualityData'])->name('quality');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactData'])->name('contact-us');
Route::get('/products', [App\Http\Controllers\HomeController::class, 'productPage'])->name('products');
Route::get('/product/{slug}', [App\Http\Controllers\HomeController::class, 'singleProduct'])->name('product');
Route::post('/contactForm', [App\Http\Controllers\HomeController::class, 'contactForm'])->name('contactForm');
Route::get('/request-catalog', [App\Http\Controllers\HomeController::class, 'requestCatalog'])->name('request-catalog');
Route::get('/products/search', [App\Http\Controllers\HomeController::class, 'productSearch'])->name('productSearch');