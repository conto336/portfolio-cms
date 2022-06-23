<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('project/{slug}', [HomeController::class, 'details'])->name('proyect');

Route::post('send-mail', [MailController::class, 'sendmail'])->name('sendmail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

    Route::get('/create-project', [ProjectController::class, 'create'])->name('create.project');

    Route::post('/create-project', [ProjectController::class, 'store'])->name('create.project.store');

    Route::get('/edit-project/id={id}/slug={slug}', [ProjectController::class, 'edit'])->name('create.project.edit');

    Route::put('/update-project={project}', [ProjectController::class, 'update'])->name('create.project.update');

    Route::put('update-profile-user={user}', [UserController::class, 'update'])->name('update');
});
