<?php

use App\Models\Adder;
use Illuminate\Http\Request;
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
	$adder = Adder::whereDate("created_at", date("Y-m-d"))->first();
	return view('welcome', compact("adder"));
});

Route::post('/adder', function (Request $request) {
	$adder = Adder::whereDate("created_at", date("Y-m-d"))->first();

	if (isset($adder)) {
		$adder->click += 1;
		$adder->save();
	} else {
		$add = new Adder();
		$add->click = 1;
		$add->save();
	}
	return redirect("/");
});
