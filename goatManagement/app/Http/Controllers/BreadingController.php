<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Breading;

class BreadingController extends Controller
{
    public function index(){
    	return view("admin.breading.breading");
    }

    public function store(Request $request){
    	$this->validate($request,[
    		"doeId" => "required",
    		"buckId" => "required",
    		"breedingDate" => "required",
    		"heatDate" => "nullable",
    		"delevaryDateFrom" => "nullable",
    		"delevaryDateTo" => "nullable",
    		"note" => "nullable",
    	]);

    	$data = new Breading();

    	$data->doeId = $request->doeId;
    	$data->buckId = $request->buckId;
    	$data->heatDate = $request->heatDate;
    	$data->breedingDate = $request->breedingDate;
    	$data->delevaryDateFrom = $request->delevaryDateFrom;
    	$data->delevaryDateTo = $request->delevaryDateTo;
    	$data->note = $request->note;
    	$data->save();

    	return Redirect("/breading")->with("msg", "Breeding Information added successfully");
    }
}
