<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EntrepriseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ImportationController as AdminImportationController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\StockController as AdminStockController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\EventController as FrontEventController;
use App\Http\Controllers\Front\ImportationController;
use App\Http\Controllers\Front\StockController;
use App\Http\Controllers\Front\WelcomeController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\CheckPrivilege;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [WelcomeController::class, 'index'])->name('home');

Route::get('/attendee/{registration}', [WelcomeController::class, 'item'])->name('attendee');
Route::post('/attendee', [WelcomeController::class, 'store'])->name('store.attendee');
Route::get('/print/{registration}', [WelcomeController::class, 'print'])->name('print.attendee');
Route::post('/search', [WelcomeController::class, 'search'])->name('search.attendee');

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function ($id, $hash, Request $request) {
    $user = User::findOrFail($id);
    if (!$user->hasVerifiedEmail()) {
        $user->markEmailAsVerified();
    }
    return redirect('/login');
})->middleware(['signed'])->name('verification.verify');

Auth::routes();

Route::get('log-out', function () {
    Auth::logout();
    return redirect('/login');
});

Route::middleware('auth')->group(function () {
    /*
    | Admlinistrateur
    */
    Route::prefix('admin')->namespace('Admin')->middleware([Admin::class])->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/', [DashboardController::class, 'index']);

        //user_type
        Route::get('user-types', [UserController::class, 'userType'])->name('admin.list.user-type');

        //role
        Route::get('roles', [RoleController::class, 'index'])->name('admin.list.role');
        Route::post('role/delete/{_id}', [RoleController::class, 'update'])->name('admin.delete.role');
        Route::post('role', [RoleController::class, 'save'])->name('admin.store.role');
        Route::post('role/edit/{_id}', [RoleController::class, 'update'])->name('admin.update.role');
        Route::post('edit-role', [RoleController::class, 'edit'])->name('admin.edit.role');
        Route::get('delete-role/{role}', [RoleController::class, 'delete'])->name('admin.delete.role');

        Route::post('role-user', [RoleController::class, 'roleUser'])->name('admin.assign.role');
        Route::post('role-privilege', [RoleController::class, 'rolePrivilege'])->name('admin.assign.privilige');

        //privilege
        Route::get('privileges', [RoleController::class, 'privileges'])->name('admin.list.privilege');
        Route::post('privilege/delete/{_id}', [RoleController::class, 'updatePrivilege'])->name('admin.delete.privilege');
        Route::post('privilege', [RoleController::class, 'savePrivilege'])->name('admin.store.privilege');
        Route::post('privilege/edit/{_id}', [RoleController::class, 'updatePrivilege'])->name('admin.update.privilege');
        Route::post('edit-privilege', [RoleController::class, 'editPrivilege'])->name('admin.edit.privilege');

        //user
        Route::get('list-users', [UserController::class, 'users'])->name('admin.list.user');
        Route::post('user-create', [UserController::class, 'store'])->name('admin.user.create');
        Route::post('user-edit', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::post('user-assign', [UserController::class, 'assign'])->name('admin.user.assign');
        Route::post('user-update/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::post('user-assign-role', [UserController::class, 'assignRole'])->name('admin.user.assign.role');

        Route::get('profil', [UserController::class, 'profil'])->name('admin.profil.user');
        Route::post('profil/update', [UserController::class, 'updateProfil'])->name('admin.profil.update');
        Route::post('profil/password/{user}', [UserController::class, 'updatePassword'])->name('admin.profil.password');

        //registration
        Route::get('/registration/{event}', [RegistrationController::class, 'index'])->name('admin.registration');
        Route::post('/get/registration', [RegistrationController::class, 'ajaxItem'])->name('get-registration');
        Route::post('/update/registration/{registration}', [RegistrationController::class, 'update'])->name('update.registration');
        Route::get('/ajax/compagnie/registrations/{event}', [RegistrationController::class, 'ajaxListCompagnie'])->name('list-compagnie-registration');
        Route::get('/ajax/attendee/registrations/{event}', [RegistrationController::class, 'ajaxListAttendee'])->name('list-attendee-registration');
    });
});
