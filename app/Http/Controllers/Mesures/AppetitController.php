<?php

namespace App\Http\Controllers\Mesures;

use App\Models\Pet;
use App\Models\Appetit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppetitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('mesures.appetit.index');
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function show(Appetit $appetit)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function edit(Appetit $appetit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appetit $appetit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appetit $appetit)
    {
        //
    }
}
