<?php

namespace App\Http\Controllers\Mesures;

use Carbon\Carbon;
use App\Models\Poids;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PoidsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $poids = Poids::where('pet_id',$id)->get();

       $todayDate = Carbon::now()->format('Y-m-d');
       return view('mesures.poids.index', compact('poids', 'todayDate'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesures.poids.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $poids = new Poids;

        $poids->poids = $request->poids;
        $poids->pet_id = $id;
        $poids->date = $request->date;
        $poids->created_at = now();
        $poids->updated_at = now();

        $poids->save();

        return redirect('/pets/'.$poids->pet_id.'/mesures/poids')->with('success', 'poids créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poids  $poids
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poids = Poids::find($id);
        return view('mesures.poids.show')->with('poids', $poids);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poids  $poids
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poids = Poids::findOrFail($id);

        return view('mesures.poids.edit', compact('poids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poids  $poids
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $poids = Poids::find($id);

        $poids->poids = $request->poids;
        $poids->date = $request->date;
        $poids->updated_at = now();

        $poids->save();

        return redirect('/pets/'.$poids->pet_id.'/mesures/poids')->with('success', 'appetit modifié avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poids  $poids
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poids = Poids::findOrFail($id);
        $poids->delete();

        return redirect('/pets/'.$poids->pet_id.'/mesures/poids')->with('success', 'poids supprimer avec succèss');
    }
}
