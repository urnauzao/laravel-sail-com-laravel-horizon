<?php

use App\Jobs\CreateUserJob;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/users/total', function () {
    return response()->json(["users" => ["total" => User::all()->count()]]);
});

Route::get('/users/job', function () {
    CreateUserJob::dispatch();
    return response()->json(["msg" => "Job dispachado com sucesso!"]);
});

Route::get('/users/job-multiple', function () {
    $qtd_jobs = 100;
    for($i=0;$i<$qtd_jobs;$i++){
        CreateUserJob::dispatch()->onQueue('default');
    }
    return response()->json(["msg" => "Jobs dispachados com sucesso!"]);
});

Route::get('/users/job-delay', function () {
    CreateUserJob::dispatch()->delay(now()->addMinute());
    return response()->json(["msg" => "Job dispachado e agendado com sucesso!"]);
});
