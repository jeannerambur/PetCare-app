<?php

namespace App\Http\Controllers\Health;

use App\Http\Controllers\Controller;
use App\Models\Wound;
use Illuminate\Http\Request;

class WoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $wounds = Wound::where('pet_id',$id)->get();
       return view('health.wound.index', compact('wounds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('health.wound.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $wound = new Wound;

        $wound->name = $request->name;
        $wound->pet_id = $id;
        $wound->wound_date = $request->wound_date;
        $wound->healing_date = $request->healing_date;
        $wound->created_at = now();
        $wound->updated_at = now();

        $wound->save();

        return redirect('/pets/'.$wound->pet_id.'/health/wounds')->with('success', 'allergy créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wound  $wound
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wound = Wound::find($id);
        return view('health.wound.show')->with('wound', $wound);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wound  $wound
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wound = Wound::findOrFail($id);

        return view('health.wound.edit', compact('wound'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wound  $wound
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $wound = Wound::find($id);

        $wound->name = $request->name;
        $wound->pet_id = $id;
        $wound->wound_date = $request->wound_date;
        $wound->healing_date = $request->healing_date;
        $wound->updated_at = now();

        $wound->save();

        return redirect('/pets/'.$wound->pet_id.'/health/wounds')->with('success', 'wound modifié avec succèss');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wound  $wound
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wound = Wound::findOrFail($id);
        $wound->delete();

        return redirect('/pets/'.$wound->pet_id.'/health/wounds')->with('success', 'wound supprimer avec succèss');
    }
}
