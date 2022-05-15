<?php

namespace App\Http\Controllers\Care;

use Carbon\Carbon;
use App\Models\Vaccine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $vaccines = Vaccine::where('pet_id',$id)->get();
       $todayDate = Carbon::now()->format('Y-m-d');
       return view('care.vaccines.index', compact('vaccines', 'todayDate'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('care.vaccines.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $vaccine = new Vaccine;

        $vaccine->type = $request->type;
        $vaccine->pet_id = $id;
        $vaccine->name = $request->name;
        $vaccine->dose = $request->dose;
        $vaccine->date = $request->date;
        $vaccine->created_at = now();
        $vaccine->updated_at = now();

        $vaccine->save();

        return redirect('/pets/'.$vaccine->pet_id.'/care/vaccines')->with('success', 'Vaccin créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vaccine = Vaccine::find($id);
        return view('care.vaccines.show')->with('vaccine', $vaccine);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vaccine = Vaccine::findOrFail($id);

        return view('care.vaccines.edit', compact('vaccine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $vaccine = Vaccine::find($id);

        $vaccine->type = $request->type;
        $vaccine->name = $request->name;
        $vaccine->dose = $request->dose;
        $vaccine->date = $request->date;
        $vaccine->updated_at = now();

        $vaccine->save();

        return redirect('/pets/'.$vaccine->pet_id.'/care/vaccines')->with('success', 'Vaccin modifié avec succès');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaccine  $vaccine
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vaccine = Vaccine::findOrFail($id);
        $vaccine->delete();

        return redirect('/pets/'.$vaccine->pet_id.'/care/vaccines')->with('success', 'Vaccin supprimer avec succès');
    }
}
