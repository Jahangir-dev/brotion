<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\TenderController;
use App\Http\Controllers\UserController;
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
return redirect()->route('welcome');
});

Route::get('/profile', function () {
    return view('profile');
    });
Route::get('new_tender_one',[TenderController::class, 'index'])->name('new_tender_one');
Route::post('new_tender_one_save',[TenderController::class, 'onesave'])->name('new_tender_one_save');

Route::get('new_tender_two',[TenderController::class, 'new_tender_two'])->name('new_tender_two');
Route::post('new_tender_two_save',[TenderController::class, 'twosave'])->name('new_tender_two_save');

Route::get('new_tender_third_tab/{id}',[TenderController::class, 'new_tender_third_tab'])->name('new_tender_third_tab');
Route::post('new_tender_third_tab/save',[TenderController::class, 'threesave']);

Route::post('extend_date',[TenderController::class, 'extend_date']);

Route::get('/new_tender_three', function () {
        return view('userpages.new_tender_three');
        });
// Route::get('/new_tender_third_tab', function () {
//             return view('userpages.new_tender_third_tab');
//             });

Route::post('forget-password-post', [AuthController::class, 'submitForgetPasswordForm'])->name('forget-password-post');
Route::get('reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('welcome', [UserController::class, 'welcome'])->name('welcome');
Route::get('email-verification/{token}', [AuthController::class, 'email_verification'])->name('email-verification');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register-save', [AuthController::class, 'register_save'])->name('register-save');
Route::post('login-post', [AuthController::class, 'login_post'])->name('login-post');
Route::get('forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');




Route::group(['prefix' => 'admin',  'middleware' => ['can:admin']], function()
{
Route::get('admin-home', [AdminController::class, 'admin_home'])->name('admin-home');
Route::get('user-delete/{id}/{role}', [AdminController::class, 'user_delete'])->name('user-delete');
Route::get('user-bidding', [AdminController::class, 'user_bidding'])->name('user-bidding');
Route::get('admin-user-bidding-delete/{id}', [AdminController::class, 'admin_user_bidding_delete'])->name('admin-user-bidding-delete');
Route::get('opportunity-title-list', [AdminController::class, 'opportunity_title_list'])->name('opportunity-title-list');
Route::get('admin-opportuninty-title', [AdminController::class, 'admin_opportuninty_title'])->name('admin-opportuninty-title');
Route::post('opportunity-title-save', [AdminController::class, 'opportunity_title_save'])->name('opportunity-title-save');
Route::get('admin-opportuninty-title-edit/{id}', [AdminController::class, 'admin_opportuninty_title_edit'])->name('admin-opportuninty-title-edit');
Route::post('opportunity-title-update', [AdminController::class, 'opportunity_title_update'])->name('opportunity-title-update');
Route::get('admin-opportuninty-title-delete/{id}', [AdminController::class, 'admin_opportuninty_title_delete'])->name('admin-opportuninty-title-delete');
Route::get('sector-list', [AdminController::class, 'sector_list'])->name('sector-list');
Route::get('admin-add-sector', [AdminController::class, 'admin_add_sector'])->name('admin-add-sector');
Route::post('admin-sector-save', [AdminController::class, 'admin_sector_save'])->name('admin-sector-save');
Route::get('sector-edit/{id}', [AdminController::class, 'sector_edit'])->name('sector-edit');
Route::post('admin-sector-update', [AdminController::class, 'admin_sector_update'])->name('admin-sector-update');
Route::get('admin-sector-delete/{id}', [AdminController::class, 'admin_sector_delete'])->name('admin-sector-delete');
Route::get('city-list', [AdminController::class, 'city_list'])->name('city-list');
Route::get('admin-add-new-city', [AdminController::class, 'admin_add_new_city'])->name('admin-add-new-city');
Route::post('admin-city-save', [AdminController::class, 'admin_city_save'])->name('admin-city-save');
Route::get('admin-city-edit/{id}', [AdminController::class, 'admin_city_edit'])->name('admin-city-edit');
Route::post('admin-city-update', [AdminController::class, 'admin_city_update'])->name('admin-city-update');
Route::get('admin-city-delete/{id}', [AdminController::class, 'admin_city_delete'])->name('admin-city-delete');
Route::get('province-list', [AdminController::class, 'province_list'])->name('province-list');
Route::get('add-new-province', [AdminController::class, 'add_new_province'])->name('add-new-province');
Route::post('admin-province-save', [AdminController::class, 'admin_province_save'])->name('admin-province-save');
Route::get('province-edit/{id}', [AdminController::class, 'province_edit'])->name('province-edit');
Route::get('province-delete/{id}', [AdminController::class, 'province_delete'])->name('province-delete');
Route::post('admin-province-update', [AdminController::class, 'admin_province_update'])->name('admin-province-update');
Route::get('admin-details', [AdminController::class, 'admin_details'])->name('admin-details');
Route::get('add-details', [AdminController::class, 'add_details'])->name('add-details');
Route::post('admin-details-save', [AdminController::class, 'admin_details_save'])->name('admin-details-save');
Route::get('admin-detail-edit/{id}', [AdminController::class, 'admin_detail_edit'])->name('admin-detail-edit');
Route::post('admin-detail-update', [AdminController::class, 'admin_detail_update'])->name('admin-detail-update');



Route::get('admin-detail-delete/{id}', [AdminController::class, 'admin_detail_delete'])->name('admin-detail-delete');


Route::get('opportunity-category-list', [AdminController::class, 'opportunity_category_list'])->name('opportunity-category-list');



Route::get('add-new-opp-category', [AdminController::class, 'add_new_opp_category'])->name('add-new-opp-category');



Route::post('admin-category-save', [AdminController::class, 'admin_category_save'])->name('admin-category-save');



Route::get('opp-category-delete/{id}', [AdminController::class, 'opp_category_delete'])->name('opp-category-delete');



Route::get('opp-category-edit/{id}', [AdminController::class, 'opp_category_edit'])->name('opp-category-edit');



Route::post('admin-category-update', [AdminController::class, 'admin_category_update'])->name('admin-category-update');



Route::get('footer-setting', [AdminController::class, 'footer_setting'])->name('footer-setting');




Route::post('footer-setting-save', [AdminController::class, 'footer_setting_save'])->name('footer-setting-save');


Route::get('footer-setting-delete/{id}', [AdminController::class, 'footer_setting_delete'])->name('footer-setting-delete');


});



Route::get('testing-list', [AdminController::class, 'testing_list'])->name('testing-list');
Route::get('get-cities', [AdminController::class, 'getcity'])->name('get-cities');
Route::get('get-sector', [AdminController::class, 'getsector'])->name('get-sector');


Route::group(['prefix' => 'user',  'middleware' => ['can:user']], function()
{
Route::get('user-home', [UserController::class, 'user_home'])->name('user-home');


Route::get('opportunity-management', [UserController::class, 'opportunity_management'])->name('opportunity-management');


Route::get('create-new-opportunity', [UserController::class, 'create_new_opportunity'])->name('create-new-opportunity');
Route::get('create-opportunity/{type}', [UserController::class, 'create_opportunity'])->name('create-opportunity');
Route::post('user-opportunity-save', [UserController::class, 'user_opportunity_save'])->name('user-opportunity-save');
Route::get('user-opportunity-delete/{id}', [UserController::class, 'user_opportunity_delete'])->name('user-opportunity-delete');


Route::get('opportunity-details-approve/{id}', [UserController::class, 'opportunity_details_approve'])->name('opportunity-details-approve');


Route::post('opportunity-bidding-approve', [UserController::class, 'opportunity_bidding_approve'])->name('opportunity-bidding-approve');


Route::get('bid-management', [UserController::class, 'bid_management'])->name('bid-management');


Route::get('bidding-opportunity-details/{id}/{opp_id}', [UserController::class, 'bidding_opportunity_details'])->name('bidding-opportunity-details');
Route::get('user-business', [UserController::class, 'user_business'])->name('user-business');
Route::get('profile-update', [UserController::class, 'profile_update'])->name('profile-update');
Route::post('user-profile-update', [UserController::class, 'user_profile_update'])->name('user-profile-update');
Route::get('opp-not-required/{id}', [UserController::class, 'opp_not_required'])->name('opp-not-required');

Route::post('opp-change-due-date', [UserController::class, 'opp_change_due_date'])->name('opp-change-due-date');

Route::post('user-personal-info-save', [UserController::class, 'user_personal_info_save'])->name('user-personal-info-save');

});


Route::get('opportunity-title-search', [UserController::class, 'opportunity_title_search'])->name('opportunity-title-search');

Route::get('opportunity-details/{id}', [UserController::class, 'opportunity_details'])->name('opportunity-details');

Route::post('opportunity-details-documents-save', [UserController::class, 'opportunity_details_documents_save'])->name('opportunity-details-documents-save');
Route::get('market-place', [UserController::class, 'market_place'])->name('market-place');

Route::get('print-opportunity-detail/{id}', [UserController::class, 'print_opportunity_detail'])->name('print-opportunity-detail');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


//new page design of brotion routes

            
Route::get('user-opportunity-detail/{id}', [UserController::class, 'user_opportunity_detail'])->name('user-opportunity-detail');

Route::get('new-opportunity-detail/{id}', [UserController::class, 'new_opportunity_detail'])->name('new-opportunity-detail');

Route::get('approve-this-bid', [UserController::class, 'approve_this_bid'])->name('approve-this-bid');

Route::get('cong-bid-approved', [UserController::class, 'cong_bid_approved'])->name('cong-bid-approved');


