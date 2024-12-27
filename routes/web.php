<?php
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;


// Route::get('test',action: function(){
//     \Illuminate\Support\Facades\Mail::to('jeffrey@laracasts.com')->send(
//         new \App\Mail\JobPosted()

//     );
//     return 'Done';
    
    

// });

Route::get('/', function () {
    // $jobs=Job::all();
    // dd($jobs[0]->Salary);
    return view('home');  
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
// Route::post('/login',[RegisteredUserController::class,'store']);

// Route::post('/login', function () {
//     dd('Route works!');
// });
Route::post('/login', [SessionController::class, 'store']); 

Route::post('/logout',[SessionController::class,'destroy'])->name('logout');




Route::get('/jobs',[JobController::class,'index']);
Route::get('/jobs/create',[JobController::class,'create']);
Route::post('/jobs',[JobController::class,'store']);
// ->middleware(('auth'));
Route::get('/jobs/{job}',[JobController::class,'show']);
Route::get('/jobs/{job}/edit',[JobController::class,'edit']);
// ->middleware('auth')
// ->can('edit-job','job');
Route::patch('/jobs/{job}',[JobController::class,'update']);
// ->middleware(['auth','can:edit,job']);

Route::delete('/jobs/{job}',[JobController::class,'delete']);
// ->middleware(['auth','can:edit,job']);






// Route::resource('jobs', JobController::class);
