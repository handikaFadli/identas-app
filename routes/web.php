<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TrialRequestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/free-trial', [
        TrialRequestController::class,
        'create'
    ])->name('trial.create');

    Route::get('/konsultasi', [
        ConsultationRequestController::class,
        'create'
    ])->name('consultation.create');

    Route::post('/konsultasi', [
        ConsultationRequestController::class,
        'store'
    ])->name('consultation.store');

    Route::post('/trial', [
        TrialRequestController::class,
        'store'
    ])->name('trial.store');

    Route::get('/trial/success', [
        TrialRequestController::class,
        'success'
    ])->name('trial.success');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get(
        '/dashboard',
        [TrialRequestController::class, 'index']
    )->name('dashboard');

    Route::get(
        '/consultations',
        [ConsultationRequestController::class, 'index']
    )->name('consultations.index');
    Route::post(
        '/trial-requests/{trialRequest}/approve',
        [TrialRequestController::class, 'approve']
    )->name('trial-requests.approve');


    Route::post(
        '/trial-requests/{trialRequest}/reject',
        [TrialRequestController::class, 'reject']
    )->name('trial-requests.reject');
    // Route::get(
    //     '/',
    //     [TrialRequestController::class, 'index']
    // )->name('trial-requests.index');

    Route::resource('clients', ClientController::class);
    Route::resource('users', UserController::class);
});
