<?php

use Illuminate\Support\Facades\Route;
use App\Models\Faq;
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




/********************************************************************* FRONT SITE ROUTES **************************************************************************/

        Route::get('/clear', function () {
            Artisan::call('cache:clear');
            // Artisan::call('config:clear');
            // Artisan::call('route:clear');
            return 'Cache cleared successfully.';
        });

        
        Route::post('add_vehicle_info',[App\Http\Controllers\VehicleController::class,'add_vehicle_info'])->name('add_vehicle_info');
        Route::post('saveToken',[App\Http\Controllers\Controller::class,'saveToken'])->name('save-token');
        Route::get('test_notification',[App\Http\Controllers\Controller::class,'test_notification'])->name('test_notification');
        Route::post('assign_dealer',[App\Http\Controllers\AdminController::class,'assign_dealer'])->name('assign_dealer');
        Route::get('/', function () {return view('home');})->name('homes');
        Route::post('/',[App\Http\Controllers\VehicleController::class,'vec_search'])->name('vec_search');
        Route::get('home1', function () {return view('home1');})->name('home1');
        Route::get('veh_info/{vehicle?}', [App\Http\Controllers\VehicleController::class,'vec_info'])->name('veh_info');
        Route::get('veh_not', function () {return view('veh_not');})->name('veh_not');
        Route::get('veh_accept/{vehicle?}', [App\Http\Controllers\VehicleController::class,'vec_accept'])->name('veh_accept');
        
        Route::post('add_new_vehicle', [App\Http\Controllers\VehicleController::class,'add_new_vehicle'])->name('add_new_vehicle');
        
        Route::get('veh_offer/', function () {return view('veh_offer');})->name('veh_offer');
        Route::get('veh_multi', function () {return view('veh_multi');})->name('veh_multi');
        Route::get('privacy', function () {return view('privacy');})->name('privacy');
        Route::get('terms', function () {return view('terms');})->name('terms');
        Route::get('contact', function () {return view('contact');})->name('contact');
        Route::post('contact', [App\Http\Controllers\VehicleController::class,'contact'])->name('contact');
        Route::get('login', function () {return view('login');})->name('login');
        Route::post('dealer_login',[App\Http\Controllers\UserController::class,'dealer_login'])->name('dealer_login');
        Route::get('register', function () {return view('register');})->name('register');
        Route::post('register',[App\Http\Controllers\UserController::class,'dealer_register'])->name('dealer_register');
        Route::get('verify_password', function () {return view('verify_password');})->name('verify_password');
        Route::get('about', function () {return view('about');})->name('about');
        Route::get('faq', function () {$faqs = Faq::where('status',1)->get();return view('faq',['faqs'=>$faqs]);})->name('faq');
        Route::get('forgot_password', function () {return view('forgot_password');})->name('forgot_password');
        Route::post('forgot_password_post', [App\Http\Controllers\UserController::class,'forgot_password_post'])->name('forgot_password_post');
        Route::get('reset_password/{token}', function () {return view('admin.reset_password');})->name('reset_password');
        Route::post('reset_password_post', [App\Http\Controllers\UserController::class,'reset_password'])->name('reset_password_post');
        
        Route::get('memo', [App\Http\Controllers\AdminController::class,'memo'])->name('memo');

        


/********************************************************************* ADMIN ROUTES **************************************************************************/

    


    Route::group(['prefix' => 'admin'], function()  
    {
        Route::get('login', function () { return view('admin.login'); })->name('admin.login');
        Route::get('register', function () { return view('admin.register'); })->name('admin.register');
        Route::post('register', [App\Http\Controllers\AdminController::class,'register'])->name('registers');
        Route::post('login', [App\Http\Controllers\AdminController::class,'login'])->name('logins');
        Route::get('forgot_password', function () {return view('admin.forgot_password');})->name('forgot_password');
        
        
        
    });

   Route::group(['middleware' => ['auth']], function() 
   {
        
       Route::fallback(function () { return redirect()->route('home');});
       Route::group(['prefix' => 'admin'], function()  
    {
   
       Route::get('/', [App\Http\Controllers\AdminController::class,'admin_home'])->name('home');
       Route::post('/change_password', [App\Http\Controllers\AdminController::class,'change_password'])->name('change_password');
       Route::post('/change_dealer_password', [App\Http\Controllers\AdminController::class,'change_dealer_password'])->name('change_dealer_password');
       Route::post('add_dealer', [App\Http\Controllers\AdminController::class,'add_dealer'])->name('add_dealer');
       Route::get('add_dealer',function () {return view('admin.add_dealers');})->name('add_dealers');
       Route::get('logout', [App\Http\Controllers\AdminController::class,'logout'])->name('logout');
       Route::post('about_us', [App\Http\Controllers\AdminController::class,'about_us'])->name('about_us');
       Route::post('about_us_footer', [App\Http\Controllers\AdminController::class,'about_us_footer'])->name('about_us_footer');
       Route::post('title', [App\Http\Controllers\AdminController::class,'title'])->name('title');
       Route::post('footer', [App\Http\Controllers\AdminController::class,'footer'])->name('footer');
       Route::post('logo', [App\Http\Controllers\AdminController::class,'logo'])->name('logo');
       Route::post('footer_logo', [App\Http\Controllers\AdminController::class,'footer_logo'])->name('footer_logo');
       Route::get('phone', [App\Http\Controllers\AdminController::class,'phone'])->name('phone');
       Route::post('phone', [App\Http\Controllers\AdminController::class,'phone_post'])->name('phone_post');
       Route::post('add_price', [App\Http\Controllers\AdminController::class,'add_price'])->name('add_price');
       Route::get('all_vehicles', [App\Http\Controllers\AdminController::class,'all_vehicles'])->name('all_vehicles');
       Route::get('block_vec/{id}', [App\Http\Controllers\AdminController::class,'block_vec'])->name('block_vec');
       Route::get('active_vec/{id}', [App\Http\Controllers\AdminController::class,'active_vec'])->name('active_vec');
       Route::get('delete_vehicle/{id}', [App\Http\Controllers\AdminController::class,'delete_vehicle'])->name('delete_vehicle');
       Route::post('faqs',[App\Http\Controllers\AdminController::class,'admin_faq']);
       Route::get('admin/delete_faq/{id}',[App\Http\Controllers\AdminController::class,'delete_faq'])->name('delete_faq');
       Route::get('dealer_vehicles',[App\Http\Controllers\AdminController::class,'dealer_vehicles'])->name('dealer_vehicles');
       Route::get('veh_details/{id}', [App\Http\Controllers\AdminController::class,'veh_details'])->name('admin.veh_details');
       Route::get('dealers',[App\Http\Controllers\DealerController::class,'dealers'])->name('dealers');
       Route::get('active_dealer/{id}',[App\Http\Controllers\DealerController::class,'active_dealer'])->name('active_dealer');
       Route::get('block_dealer/{id}',[App\Http\Controllers\DealerController::class,'block_dealer'])->name('block_dealer');
       Route::get('delete_dealer/{id}',[App\Http\Controllers\DealerController::class,'delete_dealer'])->name('delete_dealer');
       Route::get('delete_message/{id}',[App\Http\Controllers\MessageController::class,'delete_message'])->name('delete_message');
       Route::post('get_dealers',[App\Http\Controllers\AdminController::class,'get_dealers'])->name('get_dealers');
       Route::get('front-end-settings', function () {return view('admin.front-end-settings');})->name('front-end-settings');
       Route::get('settings', function () {return view('admin.settings');})->name('settings');
       Route::get('images', function () {return view('admin.images');})->name('images');
       Route::get('social-links', function () {return view('admin.social-links');})->name('social-links');
       Route::get('/faqs',[App\Http\Controllers\AdminController::class,'get_faq'])->name('admin.all_faqs');
       Route::post('/add_card_info',[App\Http\Controllers\AdminController::class,'add_card_info'])->name('add_card_info');
       Route::get('messages',[App\Http\Controllers\MessageController::class,'messages'])->name('messages');
       Route::get('buy_veh', [App\Http\Controllers\AdminController::class,'buy_veh'])->name('buy_veh');
       Route::post('buy_vehicle', [App\Http\Controllers\AdminController::class,'buy_vehicle'])->name('buy_vehicle');
       Route::get('dealer_buy_vehicles', [App\Http\Controllers\AdminController::class,'dealer_buy_vehicles'])->name('dealer_buy_vehicles');
       Route::post('change_email', [App\Http\Controllers\AdminController::class,'change_email'])->name('change_email');
       Route::get('admin_email', [App\Http\Controllers\AdminController::class,'admin_email'])->name('admin_email');
       Route::post('admin_email', [App\Http\Controllers\AdminController::class,'admin_email_post'])->name('admin_email_post');
       Route::post('send_memo', [App\Http\Controllers\AdminController::class,'send_memo'])->name('send_memo');
    }); 
    
   });
   
   
  Route::post('send_message', [App\Http\Controllers\UserController::class,'send_message'])->name('send_message');

//   Route::post('forgot_password', [App\Http\Controllers\UserController::class,'forgot_password'])->name('forgot_password');

      
 
    










