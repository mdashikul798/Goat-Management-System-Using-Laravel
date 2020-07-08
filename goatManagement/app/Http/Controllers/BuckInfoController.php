<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BuckInfo;

class BuckInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.allBuck");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.buckInfo.addBuck");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "buckId" => "required |unique:buck_infos",
            "breedName" => "required",
            "collectionDate" => "required",
            "collectionAddress" => "nullable",
            "collectionPhone" => "nullable",
            "note" => "nullable",
        ]);
        $data = new BuckInfo();

        $data->buckId = $request->buckId;
        $data->breedName = $request->breedName;
        $data->birthDate = $request->birthDate;
        $data->collectionDate = $request->collectionDate;
        $data->collectionAddress = $request->collectionAddress;
        $data->collectionPhone = $request->collectionPhone;
        $data->note = $request->note;

        $data->save();

        return Redirect("/add-buck")->with("msg", "Buck successfully added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("admin.buckInfo.allBuck");
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
