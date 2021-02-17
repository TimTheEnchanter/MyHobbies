<?php

namespace App\Http\Controllers;

use App\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobbies = Hobby::all();

        //dd($hobbies);
        return view('hobby.index')->with([
            'hobbies' => $hobbies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobby.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Hobby' => 'required|min:3',
            'Description' => 'required|min:5',
        ]);

        $hobby = new Hobby([
            'Hobby' => $request['Hobby'],
            'Description' => $request['Description'],
        ]);
        $hobby->save();
        return $this->index()->with(
            [
                'message_success' => "The hobby <b>".$hobby->Hobby."</b> was created.",
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function show(Hobby $hobby)
    {
        return view('hobby.show')->with([
            'hobby' => $hobby
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobby $hobby)
    {
        return view('hobby.edit')->with([
            'hobby' => $hobby
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hobby $hobby)
    {
        $request->validate([
            'Hobby' => 'required|min:3',
            'Description' => 'required|min:5',
        ]);

        $hobby->update([
            'Hobby' => $request['Hobby'],
            'Description' => $request['Description'],
        ]);

        return $this->index()->with(
            [
                'message_success' => "The hobby <b>".$hobby->Hobby."</b> was updated.",
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hobby  $hobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hobby $hobby)
    {
        //
    }
}
