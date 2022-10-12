<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDisbursementRequest;
use App\Http\Requests\UpdateDisbursementRequest;

use App\Models\Disbursement;
use App\Models\SubsequentSajili;

class DisbursementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create_data()
    {
    Disbursement::create([
        'ssajili' => 1,
        'status' => 'yes'
        ]);

    Disbursement::create([
        'ssajili' => 2,
        'status' => 'yes'
        ]);

    Disbursement::create([
        'ssajili' => 3,
        'status' => 'yes'
        ]);

    Disbursement::create([
        'ssajili' => 4,
        'status' => 'yes'
        ]);
    
    

    echo "Disbursement data inserted";
    }

    public function select_data()
    {

    $subsequentSajilis= SubsequentSajili::all();
    foreach ($subsequentSajilis as $subsequentSajili) {
        $disbursements = Disbursement::where('id', $subsequentSajili->id)->get();
        
        foreach ($disbursements as $item)
        {
            echo "<p style='padding-left:20px'>Disbursement ID:$item->id</p>";
            echo "<p style='padding-left:20px'>from Subsequent application ID:$item->ssajili</p>";
            echo "<p style='padding-left:20px'>Status:$item->status</p><br><hr>";
        }
    }

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
     * @param  \App\Http\Requests\StoreDisbursementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisbursementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function show(Disbursement $disbursement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function edit(Disbursement $disbursement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisbursementRequest  $request
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisbursementRequest $request, Disbursement $disbursement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disbursement  $disbursement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disbursement $disbursement)
    {
        //
    }
}
