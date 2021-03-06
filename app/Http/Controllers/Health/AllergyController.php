<?php

namespace App\Http\Controllers\Health;

use Carbon\Carbon;
use App\Models\Allergy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
       $todayDate = Carbon::now()->format('Y-m-d');

       return view('health.allergies.index', compact('allergies', 'todayDate'));
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

        return redirect('/pets/'.$allergy->pet_id.'/health/allergies')->with('success', 'Allergie créée avec succès');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Allergy  $allergy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allergy = Allergy::find($id);
        return view('health.allergies.show')->with('allergy', $allergy);
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

        return redirect('/pets/'.$allergy->pet_id.'/health/allergies')->with('success', 'Allergie modifiée avec succès');
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

        return redirect('/pets/'.$allergy->pet_id.'/health/allergies')->with('success', 'Allergie supprimée avec succès');
    }
}
