<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubsequentSajiliRequest;
use App\Http\Requests\UpdateSubsequentSajiliRequest;
use App\Models\SubsequentSajili;
use App\Policies\SubsequentSajiliPolicy;
use App\Models\Sajili;

class SubsequentSajiliController extends Controller
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
    SubsequentSajili::create([
        'sajili' => 1,
        'confirm_subsequent_sajili' => 'yes',
        'status' => '01878562323'

        ]);

    SubsequentSajili::create([
        'sajili' => 1,
        'confirm_subsequent_sajili' => 'yes',
        'status' => '01878562900'
        ]);

    SubsequentSajili::create([
        'sajili' => 1,
        'confirm_subsequent_sajili' => 'yes',
        'status' => '01878562323'
        ]);

    SubsequentSajili::create([
        'sajili' => 1,
        'confirm_subsequent_sajili' => 'yes',
        'status' => '01878562323'
        ]);
        
    

    echo "SubsequentSajili data inserted";
    }

    public function select_data()
    {

    $sajilis= Sajili::all();
    foreach ($sajilis as $sajili) {
        $ssajilis = SubsequentSajili::where('id', $sajili->id)->get();
        
        foreach ($ssajilis as $saj)
        {
            echo "<p style='padding-left:20px'>Sub Sajili ID:$saj->id</p>";
            echo "<p style='padding-left:20px'>from Sajili ID:$saj->sajili</p>";
            echo "<p style='padding-left:20px'>Status:$saj->status</p><br><hr>";
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
     * @param  \App\Http\Requests\StoreSubsequentSajiliRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubsequentSajiliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubsequentSajili  $subsequentSajili
     * @return \Illuminate\Http\Response
     */
    public function show(SubsequentSajili $subsequentSajili)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubsequentSajili  $subsequentSajili
     * @return \Illuminate\Http\Response
     */
    public function edit(SubsequentSajili $subsequentSajili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubsequentSajiliRequest  $request
     * @param  \App\Models\SubsequentSajili  $subsequentSajili
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubsequentSajiliRequest $request, SubsequentSajili $subsequentSajili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubsequentSajili  $subsequentSajili
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubsequentSajili $subsequentSajili)
    {
        //
    }
}






