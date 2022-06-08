<?php

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

// Route::get('/', function () {
    //     return view('welcome');
    // });

Route::get('/','Front\HomeController@index')->name('/');

Auth::routes(['verify' => true]);

Route::get('/chat','Front\HomeController@chat')->name('chat');
Route::get('/category-sellers/{id}','Front\HomeController@categorySellers')->name('category-sellers');
Route::get('/all-categories','Front\HomeController@allCategories')->name('all-categories');

Auth::routes();

Route::get('/search', 'Front\HomeController@sellerSearch')->name('seller-search');
Route::post('/subcat', 'Front\HomeController@subCat')->name('subcat');    
Route::get('/gig-details/{id}', 'Front\HomeController@gigDetails')->name('gig-details');

Route::get('deactivated','Front\HomeController@deactivated')->name('deactivated');
//user-----------------------------------------------------------------------
Route::group(['middleware' => ['auth','verified','status']], function(){

    Route::get('/home', 'User\HomeController@index')->name('home');
    Route::get('/post-job', 'User\HomeController@jobPost')->name('post-job');
    Route::post('/post-job', 'User\HomeController@postingJob');

    Route::get('/pending-jobs', 'User\HomeController@pendingJobs')->name('pending-jobs');
    Route::get('/proposals/{id}', 'User\HomeController@proposals')->name('proposals');
    Route::get('/hire-seller/{id}', 'User\HomeController@hireSeller')->name('hire-seller');
    Route::get('/payment', 'User\HomeController@payment')->name('make-payment');
    Route::post('/payment', 'User\HomeController@paymentPost')->name('make-payment.post');

    Route::get('/ongoing-jobs', 'User\HomeController@ongoingJobs')->name('buyer-ongoing-jobs');
    Route::get('/ongoing-job/{id}', 'User\HomeController@ongoingJobDetails')->name('buyer-ongoing-job');

    Route::post('/send-file', 'User\HomeController@sendFile')->name('send-file');
    Route::post('/cancel-request', 'User\HomeController@cancelRequest')->name('cancel-request');

    Route::get('/completed-jobs', 'User\HomeController@completedJobs')->name('completed-jobs');
    Route::get('/completed-job/{id}', 'User\HomeController@completedJobDetails')->name('completed-job');
    Route::post('/feedback-submit', 'User\HomeController@feedbackSubmit')->name('feedback-submit');

    Route::get('/requests/', 'User\HomeController@requests')->name('requests');
    Route::get('/request-details/{id}', 'User\HomeController@requestDetails')->name('request-details');

    Route::post('/buyer-conversation', 'User\HomeController@conversation')->name('buyer-conversation');
    Route::get('/messages/', 'Seller\ProfileController@messages')->name('messages');
    Route::get('/buyer/message/{id}', 'User\HomeController@messageDetails')->name('buyer-message-details');
    Route::post('/message-send', 'User\HomeController@messageSend')->name('message-send');

    Route::post('order','User\HomeController@order')->name('order');
    Route::post('order-payment','User\HomeController@orderPayment')->name('order-payment');

    Route::get('orders','User\HomeController@orders')->name('orders');
    Route::get('order-details/{id}','User\HomeController@orderDetails')->name('order-details');
    Route::post('/cancel-order', 'User\HomeController@cancelOrder')->name('cancel-order');

    //seller----------------------------------------------------------------------
    //Route::get('/suggested-jobs', 'Seller\ProfileController@suggestedJobs')->name('suggested-jobs');
    Route::get('/seller-dashboard', 'Seller\ProfileController@dashboard')->name('seller-dashboard');
    Route::get('/create-gig', 'Seller\ProfileController@sellerGigs')->name('seller-gigs');
    Route::get('/edit-gig/{id}', 'Seller\ProfileController@editGig')->name('edit-gig');
    Route::post('/update-gig', 'Seller\ProfileController@updateGig')->name('update-gig');

    Route::get('/my-gigs', 'Seller\ProfileController@myGigs')->name('my-gigs');
    Route::post('/gig-submit', 'Seller\ProfileController@gigSubmit')->name('gig-submit');
    Route::get('/buyer-requests', 'Seller\ProfileController@suggestedJobs')->name('buyer-requests');

    Route::get('/bid/{id}', 'Seller\ProfileController@bid')->name('bid');
    Route::post('/bid-submit', 'Seller\ProfileController@bidSubmit')->name('bid-submit');
    Route::get('/cancel-bid/{id}', 'Seller\ProfileController@cancelBid')->name('cancel-bid');

    Route::get('/applied-jobs', 'Seller\ProfileController@appliedJobs')->name('applied-jobs');

    Route::post('/request-completed', 'Seller\ProfileController@projectCompleted')->name('request-completed');
    Route::post('/order-completed', 'Seller\ProfileController@orderCompleted')->name('order-completed');

    Route::get('/seller/completed-jobs', 'Seller\ProfileController@completedJobs')->name('seller-completed-jobs');

    Route::get('/seller/completed-job/{id}', 'Seller\ProfileController@completedJobDetails')->name('seller-completed-job');
    Route::get('/seller/completed-order/{id}', 'Seller\ProfileController@completedOrderDetails')->name('seller-completed-order');

    Route::post('/seller-conversation', 'Seller\ProfileController@conversation')->name('seller-conversation');
    Route::post('/message', 'Seller\ProfileController@message')->name('message');
    Route::get('/seller-messages/', 'Seller\ProfileController@messages')->name('seller-messages');
    Route::get('/seller/message/{id}', 'Seller\ProfileController@messageDetails')->name('seller-message-details');
});


Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\LoginController@adminLogin');
Route::get('/admin/register', 'Auth\RegisterController@showAdminRegisterForm')->name('admin.register');
Route::post('/admin/register', 'Auth\RegisterController@createAdmin');

Route::group(['middleware' => ['admin'], 'prefix'=>'admin'], function(){
    Route::get('/home','Admin\HomeController@index')->name('admin.home');
    Route::get('/add-category', 'Admin\HomeController@addCategory')->name('add-category');
    Route::post('/new-category', 'Admin\HomeController@newCategory')->name('new-category');
    Route::get('/manage-category/','Admin\HomeController@manageCategory')->name('manage-category');
    Route::get('/edit-category/{id}','Admin\HomeController@editCategory')->name('edit-category');
    Route::post('/update-category/', 'Admin\HomeController@updateCategory')->name('update-category');
    Route::post('/delete-category/','Admin\HomeController@deleteCategory')->name('delete-category');

    Route::get('/add-subcategory/{id}', 'Admin\HomeController@addSubCategory')->name('add-subcategory');
    Route::post('/new-subcategory', 'Admin\HomeController@newSubCategory')->name('new-subcategory');
    Route::get('/manage-subcategory/{id}','Admin\HomeController@manageSubCategory')->name('manage-subcategory');
    Route::get('/edit-subcategory/{id}','Admin\HomeController@editSubCategory')->name('edit-subcategory');
    Route::post('/update-subcategory/', 'Admin\HomeController@updateSubCategory')->name('update-subcategory');
    Route::post('/delete-subcategory/','Admin\HomeController@deleteSubCategory')->name('delete-subcategory');

    Route::get('/manage-users/','Admin\HomeController@manageUsers')->name('manage-users');
    Route::get('/change-user-status/{id}','Admin\HomeController@changeUserStatus')->name('change-user-status');

});
