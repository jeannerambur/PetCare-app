<?php

namespace App\Http\Controllers\Hygiene;

use Carbon\Carbon;
use App\Models\Dent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $dents = Dent::where('pet_id',$id)->get();

        $todayDate = Carbon::now()->format('Y-m-d');
        return view('hygiene.dents.index', compact('dents', 'todayDate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hygiene.dents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $dent = new Dent;
        $dent->pet_id = $id;
        $dent->date = $request->date;
        $dent->created_at = now();
        $dent->updated_at = now();

        //Dd($request->all());
        $dent->save();

        return redirect('/pets/'.$dent->pet_id.'/hygiene/dents')->with('success', 'dent créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dent  $dent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dent = Dent::find($id);
        return view('hygiene.dents.show')->with('dent', $dent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dent  $dent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dent = Dent::findOrFail($id);

        return view('hygiene.dents.edit', compact('dent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dent  $dent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $dent = Dent::find($id);

        $dent->date = $request->date;
        $dent->updated_at = now();

        $dent->save();

        return redirect('/pets/'.$dent->pet_id.'/hygiene/dents')->with('success', 'dent modifié avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dent  $dent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dent = Dent::findOrFail($id);
        $dent->delete();

        return redirect('/pets/'.$dent->pet_id.'/hygiene/dents')->with('success', 'dent supprimer avec succèss');
    }
}
