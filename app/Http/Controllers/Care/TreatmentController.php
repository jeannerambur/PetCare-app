<?php

namespace App\Http\Controllers\Care;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $treatments = Treatment::where('pet_id',$id)->get();
       return view('care.treatments.index', compact('treatments'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('care.treatments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $treatment = new Treatment;

        $treatment->name = $request->name;
        $treatment->pet_id = $id;
        $treatment->date = $request->date;
        $treatment->quantite = $request->quantite;
        $treatment->created_at = now();
        $treatment->updated_at = now();

        $treatment->save();

        return redirect('/pets/'.$treatment->pet_id.'/care/treatments')->with('success', 'treatment créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treatment = Treatment::find($id);
        return view('care.treatments.show')->with('treatment', $treatment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $treatment = Treatment::findOrFail($id);

        return view('care.treatments.edit', compact('treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $treatment = Treatment::find($id);

        $treatment->name = $request->name;
        $treatment->quantite = $request->quantite;
        $treatment->date = $request->date;
        $treatment->updated_at = now();

        $treatment->save();

        return redirect('/pets/'.$treatment->pet_id.'/care/treatments')->with('success', 'treatment modifié avec succèss');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $treatment = Treatment::findOrFail($id);
        $treatment->delete();

        return redirect('/pets/'.$treatment->pet_id.'/care/treatments')->with('success', 'treatment supprimer avec succèss');
    }
}
