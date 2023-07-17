<?php

use App\Http\Controllers\Backend\Brokers\BrokerController;
use App\Http\Controllers\Backend\Companies\CompanyController;
use App\Http\Controllers\Backend\Contacts\ContactController;
use App\Http\Controllers\Backend\Crowdfundings\CrowdfundingController;
use App\Http\Controllers\Backend\Investments\PrivateInvestmentController;
use App\Http\Controllers\Backend\Projects\ProjectController;
use App\Http\Controllers\Backend\Team\TeamController;
use App\Http\Controllers\Backend\FAQs\FAQController;
use App\Http\Controllers\Backend\Services\ServiceController;
use App\Http\Controllers\Backend\AboutUs\AboutUsController;
// use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

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

// Auth Routes
require __DIR__.'/auth.php';

// Language Switch
Route::get('language/{language}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('dashboard', 'App\Http\Controllers\Frontend\FrontendController@index')->name('dashboard');
/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Frontend', 'as' => 'frontend.'], function () {
    Route::get('/', 'FrontendController@index')->name('index');
    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('privacy', 'FrontendController@privacy')->name('privacy');
    Route::get('terms', 'FrontendController@terms')->name('terms');

    // Added by Imran
    Route::get('team', 'FrontendController@team')->name('team');
    Route::get('projects', 'FrontendController@projects')->name('projects');
    Route::get('invests', 'FrontendController@invests')->name('invests');
    Route::get('invests/crowdfundings', 'FrontendController@crowdfunding')->name('crowdfundings');
    Route::get('invests/crowdfundings/{slug}', 'FrontendController@crowdfunding_project')->name('crowdfunding_project');
    Route::get('the-western-village', 'FrontendController@the_western_village')->name('the_western_village');
    Route::get('united-8-apartment', 'FrontendController@united_8_apartment')->name('united_8_apartment');
    Route::get('invests/private-investments', 'FrontendController@privateInvestments')->name('privateInvestments');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('faq', 'FrontendController@faq')->name('faq');
    Route::get('about-us', 'FrontendController@about_us')->name('about_us');

    // Routes for Ecogardens
    Route::get('projects/ecogardens/home', 'FrontendController@eco_index')->name('eco_home');
    Route::get('projects/ecogardens/useful-info', 'FrontendController@eco_useful_info')->name('eco_useful_info');
    Route::get('projects/ecogardens/location', 'FrontendController@eco_location')->name('eco_location');
    Route::get('projects/ecogardens/choose-your-land', 'FrontendController@eco_choose_your_land')->name('eco_choose_your_land');
    Route::get('projects/ecogardens/eco-homes', 'FrontendController@eco_eco_homes')->name('eco_eco_homes');
    Route::get('projects/ecogardens/ready-to-move', 'FrontendController@eco_ready_to_move')->name('eco_ready_to_move');
    Route::get('projects/ecogardens/71-sqm-eco-homes', 'FrontendController@eco_71_sqm_eco_homes')->name('eco_71_sqm_eco_homes');
    Route::get('projects/ecogardens/85-90-sqm-eco-homes', 'FrontendController@eco_85_90_sqm_eco_homes')->name('eco_85_90_sqm_eco_homes');
    Route::get('projects/ecogardens/116-123-sqm-eco-homes', 'FrontendController@eco_116_123_sqm_eco_homes')->name('eco_116_123_sqm_eco_homes');
    Route::get('projects/ecogardens/148-sqm-eco-homes', 'FrontendController@eco_148_sqm_eco_homes')->name('eco_148_sqm_eco_homes');
    Route::get('projects/ecogardens/232-sqm-eco-homes', 'FrontendController@eco_232_sqm_eco_homes')->name('eco_232_sqm_eco_homes');
    Route::get('projects/ecogardens/who-we-are', 'FrontendController@eco_who_we_are')->name('eco_who_we_are');
    Route::get('projects/ecogardens/testimonials', 'FrontendController@eco_testimonials')->name('eco_testimonials');

    // Routes for GreenHills
    Route::get('projects/greenhills/home', 'GreenHillsController@index')->name('greenhills_home');
    Route::get('projects/greenhills/overview', 'GreenHillsController@overview')->name('greenhills_overview');


    Route::group(['middleware' => ['auth']], function () {
        /*
        *
        *  Users Routes
        *
        * ---------------------------------------------------------------------
        */
        $module_name = 'users';
        $controller_name = 'UserController';
        Route::get('profile/{id}', ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
        Route::get('profile/{id}/edit', ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
        Route::patch('profile/{id}/edit', ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
        Route::get('profile/changePassword/{username}', ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
        Route::patch('profile/changePassword/{username}', ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
        Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
        Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    });
});

/*
*
* Backend Routes
* These routes need view-backend permission
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'App\Http\Controllers\Backend', 'prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {
    /**
     * Backend Dashboard
     * Namespaces indicate folder structure.
     */
    Route::get('/', 'BackendController@index')->name('home');
    Route::get('dashboard', 'BackendController@index')->name('dashboard');

    /*
     *
     *  Settings Routes
     *
     * ---------------------------------------------------------------------
     */
    Route::group(['middleware' => ['permission:edit_settings']], function () {
        $module_name = 'settings';
        $controller_name = 'SettingController';
        Route::get("$module_name", "$controller_name@index")->name("$module_name");
        Route::post("$module_name", "$controller_name@store")->name("$module_name.store");
    });

    /*
    *
    *  Notification Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'notifications';
    $controller_name = 'NotificationsController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/markAllAsRead", ['as' => "$module_name.markAllAsRead", 'uses' => "$controller_name@markAllAsRead"]);
    Route::delete("$module_name/deleteAll", ['as' => "$module_name.deleteAll", 'uses' => "$controller_name@deleteAll"]);
    Route::get("$module_name/{id}", ['as' => "$module_name.show", 'uses' => "$controller_name@show"]);

    /*
    *
    *  Backup Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'backups';
    $controller_name = 'BackupController';
    Route::get("$module_name", ['as' => "$module_name.index", 'uses' => "$controller_name@index"]);
    Route::get("$module_name/create", ['as' => "$module_name.create", 'uses' => "$controller_name@create"]);
    Route::get("$module_name/download/{file_name}", ['as' => "$module_name.download", 'uses' => "$controller_name@download"]);
    Route::get("$module_name/delete/{file_name}", ['as' => "$module_name.delete", 'uses' => "$controller_name@delete"]);

    /*
    *
    *  Roles Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'roles';
    $controller_name = 'RolesController';
    Route::resource("$module_name", "$controller_name");

    /*
    *
    *  Users Routes
    *
    * ---------------------------------------------------------------------
    */
    $module_name = 'users';
    $controller_name = 'UserController';
    Route::get("$module_name/profile/{id}", ['as' => "$module_name.profile", 'uses' => "$controller_name@profile"]);
    Route::get("$module_name/profile/{id}/edit", ['as' => "$module_name.profileEdit", 'uses' => "$controller_name@profileEdit"]);
    Route::patch("$module_name/profile/{id}/edit", ['as' => "$module_name.profileUpdate", 'uses' => "$controller_name@profileUpdate"]);
    Route::get("$module_name/emailConfirmationResend/{id}", ['as' => "$module_name.emailConfirmationResend", 'uses' => "$controller_name@emailConfirmationResend"]);
    Route::delete("$module_name/userProviderDestroy", ['as' => "$module_name.userProviderDestroy", 'uses' => "$controller_name@userProviderDestroy"]);
    Route::get("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePassword", 'uses' => "$controller_name@changeProfilePassword"]);
    Route::patch("$module_name/profile/changeProfilePassword/{id}", ['as' => "$module_name.changeProfilePasswordUpdate", 'uses' => "$controller_name@changeProfilePasswordUpdate"]);
    Route::get("$module_name/changePassword/{id}", ['as' => "$module_name.changePassword", 'uses' => "$controller_name@changePassword"]);
    Route::patch("$module_name/changePassword/{id}", ['as' => "$module_name.changePasswordUpdate", 'uses' => "$controller_name@changePasswordUpdate"]);
    Route::get("$module_name/trashed", ['as' => "$module_name.trashed", 'uses' => "$controller_name@trashed"]);
    Route::patch("$module_name/trashed/{id}", ['as' => "$module_name.restore", 'uses' => "$controller_name@restore"]);
    Route::get("$module_name/index_data", ['as' => "$module_name.index_data", 'uses' => "$controller_name@index_data"]);
    Route::get("$module_name/index_list", ['as' => "$module_name.index_list", 'uses' => "$controller_name@index_list"]);
    Route::resource("$module_name", "$controller_name");
    Route::patch("$module_name/{id}/block", ['as' => "$module_name.block", 'uses' => "$controller_name@block", 'middleware' => ['permission:block_users']]);
    Route::patch("$module_name/{id}/unblock", ['as' => "$module_name.unblock", 'uses' => "$controller_name@unblock", 'middleware' => ['permission:block_users']]);



});

Route::group(['prefix' => 'admin', 'as' => 'backend.', 'middleware' => ['auth', 'can:view_backend']], function () {
    // Team routes
    Route::resource("teams", TeamController::class);

    // Contact routes
    Route::resource('contacts', ContactController::class);

    // Company routes
    Route::resource('companies', CompanyController::class);

    // Broker routes
    Route::resource('brokers', BrokerController::class);

    // Private Investment routes
    Route::resource('private-investments', PrivateInvestmentController::class);

    // Crowdfunding routes
    Route::resource('crowdfundings', CrowdfundingController::class);

    // Project routes
    Route::resource('projects', ProjectController::class);

    // FAQ routes
    Route::resource('faqs', FAQController::class);

    // Services routes
    Route::resource('services', ServiceController::class);

    // About Us routes
    Route::resource('about-us', AboutUsController::class);

    Route::get('pipe', [ProjectController::class, 'pipe'])->name('pipe');


});
