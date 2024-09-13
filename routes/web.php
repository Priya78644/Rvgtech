<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/email', [HomeController::class, 'email'])->name('email');

Route::get('/details/{blog}', [HomeController::class, 'details'])->name('detail');

Route::get('/affiliate', [HomeController::class, 'affiliate'])->name('affiliate');

Route::get('/adsens', [HomeController::class, 'adsens'])->name('adsens');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/life', [HomeController::class, 'life'])->name('life');

Route::get('/technology', [HomeController::class, 'technology'])->name('technology');

Route::get('/internet', [HomeController::class, 'internet'])->name('internet');

Route::get('/seo', [HomeController::class, 'seo'])->name('seo');

Route::get('/blogspot', [HomeController::class, 'blogspot'])->name('blogspot');

Route::get('/education', [HomeController::class, 'education'])->name('education');
Route::get('/fact', [HomeController::class, 'fact'])->name('fact');



Route::get('register', [\App\Http\Controllers\AuthController::class, 'registerForm'])->name('register');
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');

Route::get('login', [\App\Http\Controllers\AuthController::class, 'loginForm'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');





Route::get('dashboard', function(){
    return view('dashboard.dashboard');
})->name('dashboard'); 



// Route::resource('dashboard/blog', [BlogController::class,'blogindex']);
// Route::resource('dashboard/categories', CategoryController::class);





Route::middleware(['auth'])->group(function () {
    Route::get('dashboard/blog', [BlogController::class, 'index'])->name('index');


    Route::prefix('category')->name('category.')->group(function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('create', [CategoryController::class, 'create'])->name('create');
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('edit/{category}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::post('delete/{category}', [CategoryController::class, 'delete'])->name('delete');
    });


     Route::prefix('blog')->name('blog.')->group(function(){
        Route::get('/',[BlogController::class,'index'])->name('index');
        Route::get('create',[BlogController::class,'create'])->name('create');
        Route::post('store',[BlogController::class,'store'])->name('store');
        Route::get('edit/{blog}',[BlogController::class,'edit'])->name('edit');
        Route::post('update/{blog}',[BlogController::class,'update'])->name('update');
        Route::post('delete/{blog}',[BlogController::class,'delete'])->name('delete');
     });

    
});
