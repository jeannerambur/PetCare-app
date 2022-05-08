<?php

namespace App\Http\Controllers\Hygiene;

use Carbon\Carbon;
use App\Models\Bath;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $baths = Bath::where('pet_id',$id)->get();

        $todayDate = Carbon::now()->format('Y-m-d');
        return view('hygiene.baths.index', compact('baths', 'todayDate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hygiene.baths.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $bath = new Bath;
        $bath->pet_id = $id;
        $bath->date = $request->date;
        $bath->created_at = now();
        $bath->updated_at = now();

        //Dd($request->all());
        $bath->save();

        return redirect('/pets/'.$bath->pet_id.'/hygiene/baths')->with('success', 'bath créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bath = Bath::find($id);
        return view('hygiene.baths.show')->with('bath', $bath);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bath = Bath::findOrFail($id);

        return view('hygiene.baths.edit', compact('bath'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $bath = Bath::find($id);

        $bath->date = $request->date;
        $bath->updated_at = now();

        $bath->save();

        return redirect('/pets/'.$bath->pet_id.'/hygiene/baths')->with('success', 'bath modifié avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bath = Bath::findOrFail($id);
        $bath->delete();

        return redirect('/pets/'.$bath->pet_id.'/hygiene/baths')->with('success', 'bath supprimer avec succèss');
    }
}
