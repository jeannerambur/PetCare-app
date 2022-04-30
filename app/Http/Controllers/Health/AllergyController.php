<?php

namespace App\Http\Controllers\Health;

use App\Http\Controllers\Controller;
use App\Models\Allergy;
use Illuminate\Http\Request;

class AllergyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $allergies = Allergy::where('pet_id',$id)->get();
       return view('health.allergies.index', compact('allergies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('health.allergies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $allergy = new Allergy;

        $allergy->type = $request->type;
        $allergy->pet_id = $id;
        $allergy->date = $request->date;
        $allergy->name = $request->name;
        $allergy->created_at = now();
        $allergy->updated_at = now();

        $allergy->save();

        return redirect('/pets/'.$allergy->pet_id.'/health/allergies')->with('success', 'allergy créer avec succèss');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function show(Allergy $allergy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allergy = Allergy::findOrFail($id);

        return view('health.allergies.edit', compact('allergy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $allergy = Allergy::find($id);

        $allergy->type = $request->type;
        $allergy->name = $request->name;
        $allergy->date = $request->date;
        $allergy->updated_at = now();

        $allergy->save();

        return redirect('/pets/'.$allergy->pet_id.'/health/allergies')->with('success', 'allergy modifié avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $allergy = Allergy::findOrFail($id);
        $allergy->delete();

        return redirect('/pets/'.$allergy->pet_id.'/health/allergies')->with('success', 'allergy supprimer avec succèss');
    }
}
