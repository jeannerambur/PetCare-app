<?php

namespace App\Http\Controllers\Care;

use Carbon\Carbon;
use App\Models\Dewormer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DewormerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $dewormers = Dewormer::where('pet_id',$id)->get();

       $todayDate = Carbon::now()->format('Y-m-d');
       return view('care.dewormers.index', compact('dewormers', 'todayDate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('care.dewormers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $dewormer = new Dewormer;

        $dewormer->type = $request->type;
        $dewormer->pet_id = $id;
        $dewormer->name = $request->name;
        $dewormer->dose = $request->dose;
        $dewormer->date = $request->date;
        $dewormer->created_at = now();
        $dewormer->updated_at = now();

        $dewormer->save();

        return redirect('/pets/'.$dewormer->pet_id.'/care/dewormers')->with('success', 'Vermifuge créé avec succès');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dewormer  $dewormer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dewormer = Dewormer::find($id);
        return view('care.dewormers.show')->with('dewormer', $dewormer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dewormer  $dewormer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dewormer = Dewormer::findOrFail($id);

        return view('care.dewormers.edit', compact('dewormer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dewormer  $dewormer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $dewormer = Dewormer::find($id);

        $dewormer->type = $request->type;
        $dewormer->name = $request->name;
        $dewormer->dose = $request->dose;
        $dewormer->date = $request->date;
        $dewormer->updated_at = now();

        $dewormer->save();

        return redirect('/pets/'.$dewormer->pet_id.'/care/dewormers')->with('success', 'Vermifuge modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dewormer  $dewormer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dewormer = Dewormer::findOrFail($id);
        $dewormer->delete();

        return redirect('/pets/'.$dewormer->pet_id.'/care/dewormers')->with('success', 'Vermifuge supprimé avec succès');
    }
}
