<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AchievementController;
use App\Http\Controllers\Admin\ContactMeController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\OrganizationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\HomeController;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/test', function () {
    return view('admin.layouts.test');
});

Route::get('/dash', function () {
    return view('admin.dashboard');
});

Route::get('/achievement', function () {
    return view('admin.achievement');
});


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/', [ContactMeController::class, 'welcome'])->name('welcome');

Route::get('/contact-create', [ContactMeController::class, 'create'])->name('contact.create');
Route::post('/contact-create', [ContactMeController::class, 'store'])->name('contact.store');

Route::get('/link', function () {
    return view('sosial-media');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::get('/contact', [ContactMeController::class, 'index'])->name('admin.contact');

Route::middleware(['auth'])->group(function() {
    Route::group(['prefix' => 'achievement'], function() {
        Route::get('/', [AchievementController::class, 'index'])->name('admin.achievement');
    
        Route::get('/create', [AchievementController::class, 'create'])->name('admin.achievement.create');
        Route::post('/store', [AchievementController::class, 'store'])->name('admin.achievement.store');
    
        Route::get('/edit/{id}', [AchievementController::class, 'edit'])->name('admin.achievement.edit');
        Route::put('/update/{id}', [AchievementController::class, 'update'])->name('admin.achievement.update');
        Route::delete('/destroy/{id}', [AchievementController::class, 'destroy'])->name('admin.achievement.destroy');
    });
    
    Route::group(['prefix' => 'education'], function() {
        Route::get('/', [EducationController::class, 'index'])->name('admin.education');
    
        Route::get('/create', [EducationController::class, 'create'])->name('admin.education.create');
        Route::post('/store', [EducationController::class, 'store'])->name('admin.education.store');
    
        Route::get('/edit/{id}', [EducationController::class, 'edit'])->name('admin.education.edit');
        Route::put('/update/{id}', [EducationController::class, 'update'])->name('admin.education.update');
        Route::delete('/destroy/{id}', [EducationController::class, 'destroy'])->name('admin.education.destroy');
    });
    
    Route::group(['prefix' => 'organization'], function() {
        Route::get('/', [OrganizationController::class, 'index'])->name('admin.organization');
    
        Route::get('/create', [OrganizationController::class, 'create'])->name('admin.organization.create');
        Route::post('/store', [OrganizationController::class, 'store'])->name('admin.organization.store');
    
        Route::get('/edit/{id}', [OrganizationController::class, 'edit'])->name('admin.organization.edit');
        Route::put('/update/{id}', [OrganizationController::class, 'update'])->name('admin.organization.update');
        Route::delete('/destroy/{id}', [OrganizationController::class, 'destroy'])->name('admin.organization.destroy');
    });
    
    Route::group(['prefix' => 'project'], function() {
        Route::get('/', [ProjectController::class, 'index'])->name('admin.project');
    
        Route::get('/create', [ProjectController::class, 'create'])->name('admin.project.create');
        Route::post('/store', [ProjectController::class, 'store'])->name('admin.project.store');
    
        Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('admin.project.edit');
        Route::put('/update/{id}', [ProjectController::class, 'update'])->name('admin.project.update');
        Route::delete('/destroy/{id}', [ProjectController::class, 'destroy'])->name('admin.project.destroy');
    });
    
    Route::group(['prefix' => 'social-media'], function() {
        Route::get('/', [SocialMediaController::class, 'index'])->name('admin.social-media');
    
        Route::get('/create', [SocialMediaController::class, 'create'])->name('admin.social-media.create');
        Route::post('/store', [SocialMediaController::class, 'store'])->name('admin.social-media.store');
    
        Route::get('/edit/{id}', [SocialMediaController::class, 'edit'])->name('admin.social-media.edit');
        Route::put('/update/{id}', [SocialMediaController::class, 'update'])->name('admin.social-media.update');
        Route::delete('/destroy/{id}', [SocialMediaController::class, 'destroy'])->name('admin.social-media.destroy');
    });
});