<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\ApplyAsTutorController;
use App\Http\Controllers\CommentController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/blog', [BlogController::class, 'all'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.single');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::group(['prefix'=>'contact'], function(){
    Route::get('/', [ContactController::class, 'contact'])->name('contact');
    Route::post('/', [ContactController::class, 'contactMessage'])->name('contact.mail');
});

Route::group(['prefix'=>'request'], function(){
    Route::get('/', [RequestController::class, 'index'])->name('request');
    Route::get('/form', [RequestController::class, 'create'])->name('request.form');
    Route::post('/', [RequestController::class, 'requestMail'])->name('request.mail');
});

Route::group(['prefix'=>'apply'], function(){
    Route::get('/', [ApplyAsTutorController::class, 'index'])->name('apply');
    Route::get('/form', [ApplyAsTutorController::class, 'create'])->name('apply.form');
    Route::post('/', [ApplyAsTutorController::class, 'apply'])->name('apply.mail');
});


Route::group(['prefix'=>'admin'], function(){
    Route::get('/', function(){
      return view('admin.dashboard');      
    })->name('dashboard');

    // Route::group(['prefix'=>'login'], function(){
    //     Route::get('/', [LoginController::class, 'login'])->name('login.get');
    //     Route::post('/', [LoginController::class, 'authenticate'])->name('login.post');
    // });
    Route::group(['prefix'=>'courses', ], function(){
        Route::get('/', [CourseController::class, 'index'])->name('course.index');
        Route::get('/create', [CourseController::class, 'create'])->name('course.create');
        Route::post('/store', [CourseController::class, 'store'])->name('course.store');
        Route::get('/delete/{id}', [CourseController::class, 'delete'])->name('course.delete');
        Route::put('/update/{id}', [CourseController::class, 'update'])->name('course.update');
        Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    });
    Route::group(['prefix'=>'testimonies', ], function(){
        Route::get('/', [TestimonyController::class, 'index'])->name('testimony.index');
        Route::get('/create', [TestimonyController::class, 'create'])->name('testimony.create');
        Route::post('/store', [TestimonyController::class, 'store'])->name('testimony.store');
        Route::get('/delete/{id}', [TestimonyController::class, 'delete'])->name('testimony.delete');
        Route::put('/update/{id}', [TestimonyController::class, 'update'])->name('testimony.update');
        Route::get('/edit/{id}', [TestimonyController::class, 'edit'])->name('testimony.edit');
    });
    Route::group(['prefix'=>'tutors', ], function(){
        Route::get('/', [TutorController::class, 'index'])->name('tutor.index');
        Route::get('/create', [TutorController::class, 'create'])->name('tutor.create');
        Route::post('/store', [TutorController::class, 'store'])->name('tutor.store');
        Route::get('/delete/{id}', [TutorController::class, 'delete'])->name('tutor.delete');
        Route::put('/update/{id}', [TutorController::class, 'update'])->name('tutor.update');
        Route::get('/edit/{id}', [TutorController::class, 'edit'])->name('tutor.edit');
    });
    Route::group(['prefix'=>'articles'], function(){
        Route::get('/', [BlogController::class, 'index'])->name('post.index');
        Route::get('/create', [BlogController::class, 'create'])->name('post.create');
        Route::post('/store', [BlogController::class, 'store'])->name('post.store');
        Route::get('/delete/{id}', [BlogController::class, 'delete'])->name('post.delete');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('post.edit');
        Route::put('/update/{id}', [BlogController::class, 'update'])->name('post.update');
    });
    // Route::group(['prefix'=>'events', 'middleware'=>'auth.user'], function(){
    //     Route::get('/', [EventController::class, 'index'])->name('event.index');
    //     Route::get('/create', [EventController::class, 'create'])->name('event.create');
    //     Route::post('/store', [EventController::class, 'store'])->name('event.store');
    // });
    // Route::group(['prefix'=>'series', 'middleware'=>'auth.user'], function(){
    //     Route::get('/', [SeriesController::class, 'index'])->name('series.index');
    //     Route::get('/create', [SeriesController::class, 'create'])->name('series.create');
    //     Route::post('/store', [SeriesController::class, 'store'])->name('series.store');
    // });
    // Route::group(['prefix'=>'series'], function(){
    //     Route::get('/', [SeriesController::class, 'index'])->name('series.index');
    //     Route::get('/create', [SeriesController::class, 'create'])->name('series.create');
    //     Route::post('/store', [SeriesController::class, 'store'])->name('series.store');
    // });
    // Route::group(['prefix'=>'gallery', 'middleware'=>'auth.user'], function(){
    //     Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
    //     Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
    //     Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
    // });
});