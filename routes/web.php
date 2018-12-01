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

//Route::group(['middleware' => ['web']], function () {

Route::get('/', 'PagesController@getHome');
Route::get('/login', 'PagesController@getLogin');
Route::get('/signup', 'PagesController@getSignup');
Route::get('/otpverification', 'PagesController@getOtpVerification');
Route::get('/driververification', 'PagesController@getDriverVerification');
Route::get('/check', 'PagesController@getDriverVerificationcheck');
Route::get('/customer', 'PagesController@getCustomer');
Route::get('/booking', 'PagesController@getbooking');
Route::get('/vehicle', 'PagesController@getvehicle');
Route::get('/driverpool', 'PagesController@getdriverpool');
Route::get('/success', 'PagesController@getsuccess');
Route::get('/success/msg', 'SuccessController@Success');
Route::get('/logout', 'LogoutController@Logout');
Route::get('/searchresults', 'PagesController@getsearch');
Route::get('/driverdetails', 'PagesController@getdriver');
Route::get('/qdmsearch', 'PagesController@getresults');
Route::get('/conformbooking', 'PagesController@getcbooking');
Route::get('/customerdashboard', 'PagesController@getcdashboard');
Route::get('/customerprofile', 'PagesController@getcprofile');
Route::get('/customerrides', 'PagesController@getcrides');
Route::get('/customersettings', 'PagesController@getcsettings');
Route::get('/customerpayments', 'PagesController@getcpayments');
Route::get('/driverdashboard', 'PagesController@getddashboard');
Route::get('/driverresults', 'PagesController@getdresults');
Route::get('/qdbooking', 'PagesController@getqdbook');
Route::get('/mobile', 'PagesController@getmobile');
Route::get('/otpcheck', 'PagesController@getotpcheck');
Route::get('/clint', 'PagesController@getclint');
Route::get('/google', 'PagesController@getgoogle');
Route::get('/front', 'PagesController@getfront');
Route::get('/driverpayments', 'PagesController@getdpayments');
Route::get('/driverrides', 'PagesController@getdrides');
Route::get('/driversettings', 'PagesController@getdsettings');
Route::get('/driverprofile', 'PagesController@getdprofile');
Route::get('/postimage', 'PagesController@getpostimage');
Route::get('/driverbooking', 'QdBookingController@driverbooking');
Route::post('mobile/no', 'MobileController@mobileno');




Route::post('/customer/info', 'CustomerController@Customer');
Route::post('/driververification/info', 'DriverVerificationController@DriverVerification');
Route::post('/driververification/id', 'DriverVerificationController@DriverVerification');
Route::post('/driververification/bank', 'DriverVerificationController@DriverVerification');
Route::post('/driververification/check', 'DriverVerificationcheckController@DriverCheck');
Route::post('/signup/create', 'SignupController@createUser');
Route::post('/signin/user', 'SigninController@userLogin');
Route::post('/checkotp', 'OtpVerificationController@VerifyOtp');
Route::get('/search', 'SearchController@SearchResults');
Route::get('/driverprofiles', 'DriverProfileController@DriverProfile');
Route::get('/customerprofiles','CustomerProfileController@CustomerProfile');
Route::get('/driverdetail','DriverDetailsController@Driverdetails');
Route::post('/vehicle/info', 'VehicleController@Vehicle_info');
Route::post('/driver/pool', 'DriverPoolController@Driverpool');
Route::get('/booking/user', 'BookingController@Booking');
Route::get('/driver/rides', 'DriverRidesController@DriverRides');
Route::get('/driver/payments', 'DriverRidesController@DriverPayments');






//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
