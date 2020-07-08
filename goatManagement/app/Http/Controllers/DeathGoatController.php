<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeathInfo;
use App\GoatInfo;
use DB;

class DeathGoatController extends Controller
{
    public function index(){
    	return view("admin.deathGoat.deathInfo");
    }

    public function store(Request $request){
    	$this->validate($request, [
    		"goatId" => "required",
    		"deathDate" => "required",
    		"deathCause" => "nullable",
    		"note" => "nullable",
    	]);
    	$data = new DeathInfo();
    	$data->goatId = $request->goatId;
    	$data->deathDate = $request->deathDate;
    	$data->deathCause = $request->deathCause;
    	$data->note = $request->note;
    	$data->save();

        //Update to the goat_infos table for the date goat
        $data = $request->input("goatId");//goatId from input field
        $data = DB::table('goat_infos')
            ->where(['goatId' => $data])
            ->get();
          //Taking the value from database by goatId field
        foreach( $data as $info){
            $breed = $info->breedName;
            $goatType = $info->goatType;
            $birthDate = $info->birthDate;
            $collectionDate = $info->collectionDate;
            $collectionAddress = $info->collectionAddress;
            $collectionPhone = $info->collectionPhone;
            $note = $info->note;
            $action = $info->action;
          }

          $update = array();
          $update["goatId"] = $request->goatId;
          $update["breedName"] = $breed;
          $update["goatType"] = $goatType;
          $update["birthDate"] = $birthDate;
          $update["collectionDate"] = $collectionDate;
          $update["collectionAddress"] = $collectionAddress;
          $update["collectionPhone"] = $collectionPhone;
          $update["note"] = $note;
          $update["action"] = "0";

          $id = $request->input("goatId");
          DB::table("goat_infos")
            ->where("goatId", $id)
            ->update($update);

        //return Redirect("/death-goat")->with("msg", "Death information successfully added");

        //Update to the vaccines table for the date goat
        $data = $request->input("goatId");//goatId from input field
        $data = DB::table('vaccines')
            ->where(['goatId' => $data])
            ->get();
            echo "<pre";
            print_r($data);
            echo "</pre";
            
         foreach( $data as $vax){
            $vaccineName = $vax->vaccinesName;
            $lastVaccinesDate = $vax->lastVaccinesDate;
            $nextVaccinesDate = $vax->nextVaccinesDate;
            $note = $vax->note;
            $action = $vax->action;
          }

        $update = array();
        $update["goatId"] = $request->goatId;
        $update["vaccinesName"] = $vaccineName;
        $update["lastVaccinesDate"] = $lastVaccinesDate;
        $update["nextVaccinesDate"] = $nextVaccinesDate;
        $update["note"] = $note;
        $update["action"] = "0";

        $id = $request->input("goatId");
          DB::table("vaccines")
            ->where("goatId", $id)
            ->update($update);

          return Redirect("/death-goat")->with("msg", "Death information successfully added");
    }
}
