<?php

namespace App\Http\Controllers;

use App\addwork;
use Illuminate\Http\Request;

class AddworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addwork');
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
    public function store(Request $request)
    {
        $this->validate($request, array(
            'work' => 'required',
        ));

        $addwork = addwork::create($request->all());
        $addwork->save();
        Session::flash('Success', 'The Data was successfully saved!');
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\addwork  $addwork
     * @return \Illuminate\Http\Response
     */
    public function show(addwork $addwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\addwork  $addwork
     * @return \Illuminate\Http\Response
     */
    public function edit(addwork $addwork)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\addwork  $addwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, addwork $addwork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\addwork  $addwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(addwork $addwork)
    {
        //
    }
}
