<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProspectStoreRequest;
use App\Http\Requests\ProspectUpdateRequest;
use App\Models\Prospect;
use Illuminate\Http\Request;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospects = Prospect::all();

        return Response()->json(["data" => $prospects], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \app\Http\Requests\ProspectStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProspectStoreRequest $request)
    {
        Prospect::create($request->validated());

        return Response()->json(["data" => "Prospect was created successfully"], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  Prospect  $prospect
     * @return \Illuminate\Http\Response
     */
    public function show(Prospect $prospect)
    {
        return Response()->json(["data" => $prospect], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProspectUpdateRequest $request, Prospect $prospect)
    {
        $prospect->update($request->validated());

        return Response()->json(['data' => 'prospect is updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospect $prospect)
    {
        if ($prospect->delete())
            return Response()->json(["data" => "prospect deleted"], 200);
        else
            return Response()->json(["data" => "prospect could not be deleted"], 500);
    }
}
