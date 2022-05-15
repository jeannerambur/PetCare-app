<?php

namespace App\Http\Controllers\Hygiene;

use Carbon\Carbon;
use App\Models\Groom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $grooms = Groom::where('pet_id',$id)->get();

        $todayDate = Carbon::now()->format('Y-m-d');
        return view('hygiene.grooms.index', compact('grooms','todayDate'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hygiene.grooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $groom = new Groom;
        $groom->pet_id = $id;
        $groom->date = $request->date;
        $groom->created_at = now();
        $groom->updated_at = now();

        //Dd($request->all());
        $groom->save();

        return redirect('/pets/'.$groom->pet_id.'/hygiene/grooms')->with('success', 'Toilettage créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Groom  $groom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $groom = Groom::find($id);
        return view('hygiene.grooms.show')->with('groom', $groom);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Groom  $groom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $groom = Groom::findOrFail($id);

        return view('hygiene.grooms.edit', compact('groom'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Groom  $groom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $groom = Groom::find($id);

        $groom->date = $request->date;
        $groom->updated_at = now();

        $groom->save();

        return redirect('/pets/'.$groom->pet_id.'/hygiene/grooms')->with('success', 'Toilettage modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Groom  $groom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groom = Groom::findOrFail($id);
        $groom->delete();

        return redirect('/pets/'.$groom->pet_id.'/hygiene/grooms')->with('success', 'Toilettage supprimé avec succès');
    }
}
