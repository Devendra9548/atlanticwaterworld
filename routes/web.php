<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontController;

Route::get('/safty', [frontController::class, 'websecure']);
Route::get('/destroy', [frontController::class, 'destroy']);

Route::middleware(['safty'])->group(function () {
Route::get('/', [frontController::class, 'home'])->name('home');
Route::get('home', [frontController::class, 'home'])->name('home');
Route::get('about', [frontController::class, 'about'])->name('about');
Route::get('contact-us', [frontController::class, 'contactus'])->name('contactus');
Route::get('blogs', [frontController::class, 'blogs'])->name('blog');
Route::get('blogs/{slug}', [frontController::class, 'singleblog']);
Route::get('offer', [frontController::class, 'offer'])->name('offer');
Route::get('events', [frontController::class, 'events'])->name('events');
Route::get('group-booking', [frontController::class, 'groupbooking'])->name('groupbooking');
Route::get('ticket-booking', [frontController::class, 'ticketbooking'])->name('ticketbooking');
Route::get('terms-and-conditions', [frontController::class, 'termsconditions'])->name('termsconditions');
Route::get('rules-and-regulations', [frontController::class, 'rulesregulations'])->name('rulesregulations');
});



