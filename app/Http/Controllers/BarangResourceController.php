<?php

namespace App\Http\Controllers;

use App\Models\BarangResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = BarangResource::all();
        return json_encode([
            "OUT_STAT" => "T",
            "OUT_MESS" => "Get successful",
            "OUT_DATA" => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = BarangResource::create($request->all());
        return json_encode([
            "OUT_STAT" => "T",
            "OUT_MESS" => "Create successful",
            "OUT_DATA" => $data
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $data = BarangResource::find($id);
        return json_encode([
            "OUT_STAT" => "T",
            "OUT_MESS" => "Get successful",
            "OUT_DATA" => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $data = BarangResource::find($id);
        $data->update($request->all());

        return json_encode([
            "OUT_STAT" => "T",
            "OUT_MESS" => "Update successful",
            "OUT_DATA" => $data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        BarangResource::find($id)->delete();
        return json_encode([
            "OUT_STAT" => "T",
            "OUT_MESS" => "Delete successful",
            "OUT_DATA" => [
                "id" => $id
            ]
        ]);
    }
}
