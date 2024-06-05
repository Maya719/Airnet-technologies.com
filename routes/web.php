<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;


// airnet technologies
use App\Http\Controllers\Contact_Form;
use App\Http\Controllers\Main_Controller;
use App\Http\Controllers\MyFatoorahController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\View_More_Controller;




/*
|--------------------------------------------------------------------------
| Airnet technologies routes
|--------------------------------------------------------------------------

*/


// prevent going back on previous route
Route::group(['middleware' => 'disable_back_btn'], function () {
    Route::get('/', [Main_Controller::class, 'index'])->name('index');
    Route::post('/contact', [Contact_Form::class, 'contact_form'])->name('contact_message');
    Route::get('/all-member', [View_More_Controller::class, 'more_team'])->name('view_more_team');
    Route::get('/all-projects', [View_More_Controller::class, 'more_projects'])->name('view_more_projects');
    Route::get('/single-projects/{id}', [View_More_Controller::class, 'single_project'])->name('single_projects');
    Route::get('/all-blog', [View_More_Controller::class, 'more_blogs'])->name('view_more_blogs');
});

Route::get('/blog-description/{blog_id}', [Main_Controller::class, 'load_blog_description'])->name('blog-description');

// Payment Route
Route::post('/create_session', [PaymentController::class, 'create_session'])->name('create_session');
Route::get('/success', [PaymentController::class, 'soc'])->name('checkout.success');
Route::get('/cancel', [PaymentController::class, 'soc'])->name('checkout.cancel');
// myFatoorah

// Route for creating MyFatoorah invoice
Route::post('/myfatoorah/invoice', [MyFatoorahController::class, 'index'])->name('myfatoorah.invoice');

// Route for handling MyFatoorah payment callback
Route::post('/myfatoorah/callback', [MyFatoorahController::class, 'callback'])->name('myfatoorah.callback');
// ================================================
//
//
//      Nav Bar 2
//
//
// ================================================




Route::get('/', [Main_Controller::class, 'index'])->name('home');

Route::get('/home-about', [Main_Controller::class, 'index'])->name('about');

Route::get('/home-services', [Main_Controller::class, 'index'])->name('services');

Route::get('/home-technologies', [Main_Controller::class, 'index'])->name('technologies');


Route::get('/home-portfolio', [Main_Controller::class, 'index'])->name('portfolio');

Route::get('/home-team', [Main_Controller::class, 'index'])->name('member');

Route::get('/home-blogs', [Main_Controller::class, 'index'])->name('blog');

Route::get('/home-contact', [Main_Controller::class, 'index'])->name('contact');







/*
|--------------------------------------------------------------------------
| Airnet technologies routes end
|--------------------------------------------------------------------------

*/




Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/blogs', [BlogsController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('blogs');

Route::get('/gallery', [GalleryController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('gallery');
// payments
Route::get('/dashboard-payments', [PaymentController::class, 'get_payment_keys'])
    ->middleware(['auth', 'verified'])
    ->name('payments');

Route::post('/payments', [PaymentController::class, 'edit_payment_keys'])
    ->middleware(['auth', 'verified'])
    ->name('edit_payment_keys');

// orders
Route::get('/dashboard-orders', [PaymentController::class, 'get_orders'])
    ->middleware(['auth', 'verified'])
    ->name('get_orders');
//   projects
Route::get('/projects', [ProjectController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('projects');

Route::post('/create_project', [ProjectController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('create_project');

Route::get('/get_project_by_id', [ProjectController::class, 'get_project_by_id'])
    ->middleware(['auth', 'verified'])
    ->name('get_project_by_id');

Route::post('/update_project', [ProjectController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('update_project');

Route::get('/delete_project', [ProjectController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('delete_project');

// team members
Route::get('/team', [TeamController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('team');
Route::post('/create_member', [TeamController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('create_member');

Route::get('/delete_team_member', [TeamController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('delete_team_member');

Route::get('/get_member_by_id', [TeamController::class, 'get_member_by_id'])
    ->middleware(['auth', 'verified'])
    ->name('get_member_by_id');

Route::post('/update_member', [TeamController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('update_member');





Route::post('/create_blog', [BlogsController::class, 'create'])
    ->middleware(['auth', 'verified'])
    ->name('create_blog');

Route::get('/delete_blog', [BlogsController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('delete_blog');

Route::get('/get_blog_by_id', [BlogsController::class, 'get_blog_by_id'])
    ->middleware(['auth', 'verified'])
    ->name('get_blog_by_id');

Route::post('/update_blog', [BlogsController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('update_blog');

Route::get('/blog_detail/{id}', [BlogsController::class, 'blog_detail'])
    ->middleware(['auth', 'verified'])
    ->name('blog_detail');

// messages
Route::get('/messages', [Contact_Form::class, 'messages'])
    ->middleware(['auth', 'verified'])
    ->name('messages');

Route::get('/messages/{id}', [Contact_Form::class, 'messages_show'])
    ->middleware(['auth', 'verified'])
    ->name('messages.show');

Route::get('/delete_conversation', [Contact_Form::class, 'delete_conversation'])
    ->middleware(['auth', 'verified'])
    ->name('delete_conversation');

Route::post('/send_message', [Contact_Form::class, 'send_message'])
    ->middleware(['auth', 'verified'])
    ->name('send_message');

// change logo
Route::get('/change_logo', [DashboardController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('change_logo');

Route::post('/save_logo', [DashboardController::class, 'save_logo'])
    ->middleware(['auth', 'verified'])
    ->name('save_logo');
require __DIR__ . '/auth.php';
