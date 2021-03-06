<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminAboutController;
use App\Http\Controllers\Admin\AdminTermsController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminSubscriberController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Front\NewsletterController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/test', function () {
    $blogs = App\Models\Blog::all();

    foreach($blogs as $blog) {
        $user = App\Models\User::where('id', 1)->first();
        $blog->user_id = $user->id;
        $blog->update();
    }

    return "All done Master!";
});

/**
 * Front
 */
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/aboutus', [AboutController::class, 'show'])->name('aboutUs');
Route::get('/contactus', [ContactController::class, 'show'])->name('contactUs');
Route::post('/contactus', [ContactController::class, 'store'])->name('postContactUs');
Route::post('/subscribe', [NewsletterController::class, 'store'])->name('newsletterSubscribe');

// Blogs
Route::get('/portfolio', [BlogController::class, 'index'])->name('blogIndex');
Route::get('/portfolio/{blog}', [BlogController::class, 'show'])->name('blogShow');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Admin Panel
Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('adminIndex');

    Route::patch('/mode/{user}', [AdminHomeController::class, 'mode'])->name('mode');

    // Terms
    Route::get('/terms', [AdminTermsController::class, 'index'])->name('adminTermsIndex');
    Route::post('/terms', [AdminTermsController::class, 'store'])->name('adminTermsStore');
    Route::get('/terms/create', [AdminTermsController::class, 'create'])->name('adminTermsCreate');
    Route::get('/terms/edit/{term}', [AdminTermsController::class, 'edit'])->name('adminTermsEdit');
    Route::patch('/terms/{term}', [AdminTermsController::class, 'update'])->name('adminTermsUpdate');

    // About
    Route::get('/about', [AdminAboutController::class, 'index'])->name('adminAboutIndex');
    Route::get('/about/create', [AdminAboutController::class, 'create'])->name('adminAboutCreate');
    Route::post('/about', [AdminAboutController::class, 'store'])->name('adminAboutStore');
    Route::get('/about/edit/{about}', [AdminAboutController::class, 'edit'])->name('adminAboutEdit');
    Route::patch('/about/{about}', [AdminAboutController::class, 'update'])->name('adminAboutUpdate');

    Route::get('/blogs', [AdminBlogController::class, 'index'])->name('adminBlogIndex');
    Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('adminBlogCreate');
    Route::post('/blogs', [AdminBlogController::class, 'store'])->name('adminBlogStore');
    Route::get('/blogs/{blog}', [AdminBlogController::class, 'show'])->name('adminBlogShow');
    Route::get('/blogs/edit/{blog}', [AdminBlogController::class, 'edit'])->name('adminBlogEdit');
    Route::patch('/blogs/update/{blog}', [AdminBlogController::class, 'update'])->name('adminBlogUpdate');
    Route::delete('/blogs/{blog}', [AdminBlogController::class, 'destroy'])->name('adminBlogDelete');

    Route::get('/categories', [AdminCategoryController::class, 'index'])->name('adminCategoryIndex');
    Route::post('/categories', [AdminCategoryController::class, 'store'])->name('adminCategoryStore');
    Route::patch('/categories/{category}', [AdminCategoryController::class, 'update'])->name('adminCategoryUpdate');

    Route::get('/profile/{user}', [AdminProfileController::class, 'index'])->name('adminProfile');
    Route::get('/profile/edit/{user}', [AdminProfileController::class, 'edit'])->name('adminProfileEdit');
    Route::post('/profile/edit/{user}', [AdminProfileController::class, 'update'])->name('adminProfileUpdate');

    Route::get('/messages', [AdminMessageController::class, 'index'])->name('adminMessageIndex');
    Route::get('/messages/{message}', [AdminMessageController::class, 'show'])->name('adminMessageShow');
    Route::patch('/messages/{message}', [AdminMessageController::class, 'update'])->name('adminMessageUpdate');
    Route::delete('/messages/{message}', [AdminMessageController::class, 'destroy'])->name('adminMessageDelete');

    Route::get('/subscribers', [AdminSubscriberController::class, 'index'])->name('adminSubscriberIndex');
    Route::get('/subscribers/export/', [AdminSubscriberController::class, 'export'])->name('adminSubscriberExport');

    Route::get('/teams', [AdminTeamController::class, 'index'])->name('adminTeamIndex');
    Route::post('/teams', [AdminTeamController::class, 'store'])->name('adminTeamStore');
    Route::patch('/teams/{team}', [AdminTeamController::class, 'update'])->name('adminTeamUpdate');
    Route::delete('/teams/{team}', [AdminTeamController::class, 'destroy'])->name('adminTeamDelete');

    Route::get('/testimonials', [AdminTestimonialController::class, 'index'])->name('adminTestimonialIndex');
    Route::post('/testimonials', [AdminTestimonialController::class, 'store'])->name('adminTestimonialStore');
    Route::patch('/testimonials/{testimonial}', [AdminTestimonialController::class, 'update'])->name('adminTestimonialUpdate');
    Route::delete('/testimonials/{testimonial}', [AdminTestimonialController::class, 'destroy'])->name('adminTestimonialDelete');
});
