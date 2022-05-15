<?php

namespace App\Http\Controllers\Care;

use Carbon\Carbon;
use App\Models\PestControl;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PestControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $pestcontrols = Pestcontrol::where('pet_id',$id)->get();
       $todayDate = Carbon::now()->format('Y-m-d');
       return view('care.pestcontrols.index', compact('pestcontrols', 'todayDate'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('care.pestcontrols.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $pestcontrol = new Pestcontrol;

        $pestcontrol->type = $request->type;
        $pestcontrol->pet_id = $id;
        $pestcontrol->name = $request->name;
        $pestcontrol->dose = $request->dose;
        $pestcontrol->date = $request->date;
        $pestcontrol->created_at = now();
        $pestcontrol->updated_at = now();

        $pestcontrol->save();

        return redirect('/pets/'.$pestcontrol->pet_id.'/care/pestcontrols')->with('success', 'Anti-paraisite créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PestControl  $pestControl
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pestcontrol = Pestcontrol::find($id);
        return view('care.pestcontrols.show')->with('pestcontrol', $pestcontrol);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PestControl  $pestControl
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pestcontrol = Pestcontrol::findOrFail($id);

        return view('care.pestcontrols.edit', compact('pestcontrol'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PestControl  $pestControl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $pestcontrol = Pestcontrol::find($id);

        $pestcontrol->type = $request->type;
        $pestcontrol->name = $request->name;
        $pestcontrol->dose = $request->dose;
        $pestcontrol->date = $request->date;
        $pestcontrol->updated_at = now();

        $pestcontrol->save();

        return redirect('/pets/'.$pestcontrol->pet_id.'/care/pestcontrols')->with('success', 'Anti-paraisite modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PestControl  $pestControl
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pestcontrol = Pestcontrol::findOrFail($id);
        $pestcontrol->delete();

        return redirect('/pets/'.$pestcontrol->pet_id.'/care/pestcontrols')->with('success', 'Anti-paraisite supprimer avec succès');
    }
}
