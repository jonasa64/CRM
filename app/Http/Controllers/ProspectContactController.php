<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\ProspectContact;
use App\Models\Prospect;

class ProspectContactController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactStoreRequest $request, Prospect $prospect)
    {
        ProspectContact::updateOrCreate(['prospect_id' => $prospect->id], $request->validated());

        return Response()->json(['data' => 'New contact successfully created']);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactUpdateRequest $request, Prospect $prospect)
    {
        $prospect->update($request->validated());

        return Response()->json(['data' => 'prospect contact successfully updated']);
    }
}
