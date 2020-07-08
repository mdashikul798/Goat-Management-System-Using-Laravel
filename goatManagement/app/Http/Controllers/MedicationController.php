<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaccines;
use App\OtherTreatment;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function vaccines()
        {
            return view("admin.medication.vaccines");
        }

        public function otherTreatment()
        {
            return view("admin.medication.otherTreatment");
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeVaccines(Request $request)
    {
        $this->validate($request,[
            "goatId" => "required",
            "vaccinesName" => "required",
            "lastVaccinesDate" => "required",
            "nextVaccinesDate" => "nullable",
            "note" => "nullable",

        ]);
        $data = new Vaccines();
        $data->goatId = $request->goatId;
        $data->vaccinesName = $request->vaccinesName;
        $data->lastVaccinesDate = $request->lastVaccinesDate;
        $data->nextVaccinesDate = $request->nextVaccinesDate;
        $data->note = $request->note;
        $data->action = "1";
        $data->save();
        return Redirect("/vaccines")->with("msg", "Vaccines information added successfully");
    }

    public function storeOtherTreatment(Request $request)
    {
         $this->validate($request, [
            "goatId" => "required",
            "treatmentDate" => "required",
            "aboutTreatment" => "nullable",
            "note" => "nullable",

        ]);
        $data = new OtherTreatment();
        $data->goatId = $request->goatId;
        $data->treatmentDate = $request->treatmentDate;
        $data->aboutTreatment = $request->aboutTreatment;
        $data->note = $request->note;
        $data->save();
        return Redirect("/other-treatment")->with("msg", "Vaccines information added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function vaccinesInfo()
    {
        return view("admin.medication.vaccinesInfo");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
