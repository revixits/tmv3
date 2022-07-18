<?php

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
    return view('dashboard');
});


Route::get('/reservations/list', function () {
    return view('reservations.list');
});
Route::get('/reservations/schedule', function () {
    return view('reservations.schedule');
});
Route::get('/reservations/availability', function () {
    return view('reservations.availability');
});


Route::get('/invoices/list', function () {
    return view('invoices.list');
});


Route::get('/customers/list', function () {
    return view('customers.list');
});


Route::get('/vehicles/list', function () {
    return view('vehicles.list');
});
Route::get('/vehicles/brands', function () {
    return view('vehicles.brands');
});
Route::get('/vehicles/models', function () {
    return view('vehicles.models');
});


Route::get('/agents/list', function () {
    return view('agents.list');
});
Route::get('/agents/vehicles', function () {
    return view('agents.vehicles');
});


Route::get('/periodtypes/list', function () {
    return view('periodtypes.list');
});


Route::get('/coverageareas/list', function () {
    return view('coverageareas.list');
});


Route::get('/renttypes/list', function () {
    return view('renttypes.list');
});


Route::get('/termsconditions/list', function () {
    return view('termsconditions.list');
});


Route::get('/paymentchanneltypes/list', function () {
    return view('paymentchanneltypes.list');
});


Route::get('/paymentchannels/list', function () {
    return view('paymentchannels.list');
});


Route::get('/paymentmethods/list', function () {
    return view('paymentmethods.list');
});


Route::get('/profiles/list', function () {
    return view('profiles.list');
});


Route::get('/drivers/list', function () {
    return view('drivers.list');
});


Route::get('/guests/list', function () {
    return view('guests.list');
});


Route::get('/accounts/list', function () {
    return view('accounts.list');
});
