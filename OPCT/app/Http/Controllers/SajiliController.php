<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSajiliRequest;
use App\Http\Requests\UpdateSajiliRequest;
use App\Models\Sajili;
use App\Models\User;

class SajiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Sajili::create([
            'constituency' => 'Githunguri',
            'address' => '00200, Nairobi',
            'next_of_kin' => 'John Doe',
            'user_id' => 1
            ]);
        
        Sajili::create([
            'constituency' => 'Lurambi',
            'address' => '00200, Nairobi',
            'next_of_kin' => 'John Doe',
            'user_id' => 2
            ]);
    
        Sajili::create([
            'constituency' => 'Shinyalu',
            'address' => '00200, Nairobi',
            'next_of_kin' => 'John Doe',
            'user_id' => 3
            ]);

        Sajili::create([
            'constituency' => 'Kiambaa',
            'address' => '00200, Nairobi',
            'next_of_kin' => 'John Doe',
            'user_id' => 4
            ]);
        
        Sajili::create([
            'constituency' => 'Likoni',
            'address' => '00200, Nairobi',
            'next_of_kin' => 'John Doe',
            'user_id' => 5
            ]);
    
        Sajili::create([
            'constituency' => 'Vijiweni',
            'address' => '00200, Nairobi',
            'next_of_kin' => 'John Doe',
            'user_id' => 6
            ]);
        
            echo "Sajili data inserted";
    }

    public function select_data()
    {

        $users= User::all();
        foreach ($users as $user) {
            $sajilis= Sajili::where('user_id', $user->id)->get();
            echo "<b>User: $user->name</b><br/>";
            foreach ($sajilis as $sajil)
            {
                echo "<p style='padding-left:20px'>Constituency:$sajil->constituency</p>";
                echo "<p style='padding-left:20px'>Address:$sajil->address</p><br/>";
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
     * @param  \App\Http\Requests\StoreSajiliRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSajiliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sajili  $sajili
     * @return \Illuminate\Http\Response
     */
    public function show(Sajili $sajili)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sajili  $sajili
     * @return \Illuminate\Http\Response
     */
    public function edit(Sajili $sajili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSajiliRequest  $request
     * @param  \App\Models\Sajili  $sajili
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSajiliRequest $request, Sajili $sajili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sajili  $sajili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sajili $sajili)
    {
        //
    }
}
