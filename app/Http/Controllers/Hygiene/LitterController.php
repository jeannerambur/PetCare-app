<?php

namespace App\Http\Controllers\Hygiene;

use Carbon\Carbon;
use App\Models\Litter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LitterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $litters = Litter::where('pet_id',$id)->get();

        $todayDate = Carbon::now()->format('Y-m-d');
        return view('hygiene.litters.index', compact('litters','todayDate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hygiene.litters.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $litter = new Litter;
        $litter->pet_id = $id;
        $litter->date = $request->date;
        $litter->created_at = now();
        $litter->updated_at = now();

        //Dd($request->all());
        $litter->save();

        return redirect('/pets/'.$litter->pet_id.'/hygiene/litters')->with('success', 'Litière créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $litter = Litter::find($id);
        return view('hygiene.litters.show')->with('litter', $litter);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $litter = Litter::findOrFail($id);

        return view('hygiene.litters.edit', compact('litter'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $litter = Litter::find($id);

        $litter->date = $request->date;
        $litter->updated_at = now();

        $litter->save();

        return redirect('/pets/'.$litter->pet_id.'/hygiene/litters')->with('success', 'Litière modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Litter  $litter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $litter = Litter::findOrFail($id);
        $litter->delete();

        return redirect('/pets/'.$litter->pet_id.'/hygiene/litters')->with('success', 'Litière supprimer avec succès');
    }
}
