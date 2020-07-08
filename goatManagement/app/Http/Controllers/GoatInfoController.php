<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoatInfo;

class GoatInfoController extends Controller
{

	public function index(){
		return view("admin.goatInfo.addGoat");
	}

    public function addGoat(Request $request){
    	$this->validate($request,[
    		'goatId' => 'required |unique:goat_infos',
            'breedName' => 'required',
            'goatType' => 'required',
            'birthDate' => 'nullable',
            'collectionDate' => 'nullable',
            'collectionAddress' => 'nullable',
            'collectionPhone' => 'nullable',
            'note' => 'nullable',
    	]);

    	$data = new GoatInfo();

    	$data->goatId = $request->goatId;
    	$data->breedName = $request->breedName;
    	$data->goatType = $request->goatType;
    	$data->birthDate = $request->birthDate;
    	$data->collectionDate = $request->collectionDate;
    	$data->collectionAddress = $request->collectionAddress;
    	$data->collectionPhone = $request->collectionPhone;
        $data->note = $request->note;
    	$data->action = "1";
    	$data->save();
    	return Redirect("/add-goat")->with("msg", "Goat added successfully");
    }

    public function allGoat(){
    	return view("admin.goatInfo.allGoat");
    }
}
