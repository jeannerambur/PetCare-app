<?php

namespace App\Http\Controllers\Hygiene;

use Carbon\Carbon;
use App\Models\Claw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $claws = Claw::where('pet_id',$id)->get();
        $todayDate = Carbon::now()->format('Y-m-d');

        return view('hygiene.claws.index', compact('claws', 'todayDate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hygiene.claws.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $claw = new Claw;
        $claw->pet_id = $id;
        $claw->date = $request->date;
        $claw->created_at = now();
        $claw->updated_at = now();

        //Dd($request->all());
        $claw->save();

        return redirect('/pets/'.$claw->pet_id.'/hygiene/claws')->with('success', 'Griffe créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Claw  $claw
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $claw = Claw::find($id);
        return view('hygiene.claws.show')->with('claw', $claw);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Claw  $claw
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $claw = Claw::findOrFail($id);

        return view('hygiene.claws.edit', compact('claw'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Claw  $claw
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $claw = Claw::find($id);

        $claw->date = $request->date;
        $claw->updated_at = now();

        $claw->save();

        return redirect('/pets/'.$claw->pet_id.'/hygiene/claws')->with('success', 'Griffe modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Claw  $claw
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $claw = Claw::findOrFail($id);
        $claw->delete();

        return redirect('/pets/'.$claw->pet_id.'/hygiene/claws')->with('success', 'Griffe supprimée avec succès');
    }
}
