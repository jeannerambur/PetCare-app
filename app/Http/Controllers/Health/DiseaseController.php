<?php

namespace App\Http\Controllers\Health;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $diseases = Disease::where('pet_id',$id)->get();
       return view('health.diseases.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('health.diseases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $disease = new Disease;

        $disease->type = $request->type;
        $disease->pet_id = $id;
        $disease->name = $request->name;
        $disease->begin_date = $request->begin_date;
        $disease->healing_date = $request->healing_date;
        $disease->created_at = now();
        $disease->updated_at = now();

        $disease->save();

        return redirect('/pets/'.$disease->pet_id.'/health/diseases')->with('success', 'disease créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function show(Disease $disease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disease = Disease::findOrFail($id);

        return view('health.diseases.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //Dd($request->all());
         $disease = Disease::find($id);

         $disease->type = $request->type;
         $disease->pet_id = $id;
         $disease->name = $request->name;
         $disease->begin_date = $request->begin_date;
         $disease->healing_date = $request->healing_date;
         $disease->updated_at = now();

         $disease->save();

         return redirect('/pets/'.$disease->pet_id.'/health/diseases')->with('success', 'disease créer avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disease  $disease
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disease = Disease::findOrFail($id);
        $disease->delete();

        return redirect('/pets/'.$disease->pet_id.'/health/diseases')->with('success', 'disease supprimer avec succèss');
    }
}
