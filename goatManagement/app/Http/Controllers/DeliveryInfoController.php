<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DeliveryInfo;
use App\KidsInfo;

class DeliveryInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function motherInfo()
    {
        return view("admin.deliveryInfo.motherInfo");
    }

     public function kidsInfo()
    {
        return view("admin.deliveryInfo.kidsInfo");
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
    public function storeDelevary(Request $request)
    {
        $this->validate($request,[
            "goatId" => "required",
            "deleveryDate" => "required",
            "kidsNumber" => "required",
            "totalMale" => "nullable",
            "totalFemail" => "nullable",
            "note" => "nullable",
        ]);
        $data = new DeliveryInfo();

        $data->goatId = $request->goatId;
        $data->deleveryDate = $request->deleveryDate;
        $data->kidsNumber = $request->kidsNumber;
        $data->totalMale = $request->totalMale;
        $data->totalFemail = $request->totalFemail;
        $data->note = $request->note;
        $data->save();
        return Redirect("/mother-info")->with("msg", " Mother info added successfully");
    }

     public function storeKids(Request $request)
    {
        $this->validate($request,[
            "goatId" => "required",
            "rearingNumber" => "nullable",
            "saleNumber" => "nullable",
            "deathNumber" => "nullable",
            "note" => "nullable",
        ]);
        $data = new KidsInfo();

        $data->goatId = $request->goatId;
        $data->rearingNumber = $request->rearingNumber;
        $data->saleNumber = $request->saleNumber;
        $data->deathNumber = $request->deathNumber;
        $data->note = $request->note;
        $data->save();
        return Redirect("/kids-info")->with("msg", " Kids info added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pregnantGoat()
    {
        return view("admin.deliveryInfo.pregnantGoat");
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
