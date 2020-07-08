<?php

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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get("/admin", function(){
	return view("admin.dashboard");
});

//Goat info
Route::get("/add-goat", "GoatInfoController@index");
Route::post("/save-goat", "GoatInfoController@addGoat");
Route::get("/all-goat", "GoatInfoController@allGoat");

//Buck Info
Route::get("/add-buck", "BuckInfoController@create");
Route::post("/save-buck", "BuckInfoController@store");
Route::get("/all-buck", "BuckInfoController@show");

//Breading
Route::get("/breading", "BreadingController@index");
Route::post("/save", "BreadingController@store");

//Delivery info
Route::get("/mother-info", "DeliveryInfoController@motherInfo");
Route::post("/save-motherInfo", "DeliveryInfoController@storeDelevary");
Route::get("/pregnant-goat", "DeliveryInfoController@pregnantGoat");
Route::post("/save-kids", "DeliveryInfoController@storeKids");
Route::get("/kids-info", "DeliveryInfoController@kidsInfo");

//Medication
Route::get("/vaccines", "MedicationController@vaccines");
Route::post("/save-vaccines", "MedicationController@storeVaccines");
Route::get("/other-treatment", "MedicationController@otherTreatment");
Route::post("/save-otherTreatment", "MedicationController@storeOtherTreatment");
Route::get("/vaccines-info", "MedicationController@vaccinesInfo");

//Death Goat
Route::get("/death-goat", "DeathGoatController@index");
Route::post("/saveDeath", "DeathGoatController@store");