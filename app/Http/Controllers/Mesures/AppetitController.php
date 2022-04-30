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
       $appetits = Appetit::where('pet_id',$id)->get();
       return view('mesures.appetit.index', compact('appetits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesures.appetit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $appetit = new Appetit;

        $appetit->appetit = $request->appetit;
        $appetit->pet_id = $id;
        $appetit->date = $request->date;
        $appetit->heure = $request->heure;
        $appetit->created_at = now();
        $appetit->updated_at = now();

        $appetit->save();

        return redirect('/pets/'.$appetit->pet_id.'/mesures/appetit')->with('success', 'appetit créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appetit = Appetit::find($id);
        return view('mesures.appetit.show')->with('appetit', $appetit);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appetit = Appetit::findOrFail($id);

        return view('mesures.appetit.edit', compact('appetit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Dd($request->all());
        $appetit = Appetit::find($id);

        $appetit->appetit = $request->appetit;
        $appetit->date = $request->date;
        $appetit->heure = $request->heure;
        $appetit->updated_at = now();

        $appetit->save();

        return redirect('/pets/'.$appetit->pet_id.'/mesures/appetit')->with('success', 'appetit modifié avec succèss');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appetit  $appetit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appetit = Appetit::findOrFail($id);
        $appetit->delete();

        return redirect('/pets/'.$appetit->pet_id.'/mesures/appetit')->with('success', 'Appetit supprimer avec succèss');
    }
}
