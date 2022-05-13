<?php

namespace App\Http\Controllers;

use App\Models\Veterinary;
use Illuminate\Http\Request;

class VeterinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $veterinaries = Veterinary::where('pet_id',$id)->get();
       return view('veterinaries.index', compact('veterinaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('veterinaries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $veterinary = new Veterinary;


        $veterinary->name = $request->name;
        $veterinary->pet_id = $id;
        $veterinary->lastname = $request->lastname;
        $veterinary->adress = $request->adress;
        $veterinary->zipcode = $request->zipcode;
        $veterinary->city = $request->city;
        $veterinary->phone = $request->phone;
        $veterinary->email = $request->email;
        $veterinary->image = $request->image;
        $veterinary->created_at = now();
        $veterinary->updated_at = now();

        $veterinary->save();

        return redirect('/pets/'.$veterinary->pet_id.'/veterinaries')->with('success', 'veterinaire créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $veterinary = Veterinary::find($id);
        return view('veterinaries.show')->with('veterinary', $veterinary);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veterinary = Veterinary::findOrFail($id);

        return view('veterinaries.edit', compact('veterinary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //Dd($request->all());
        $veterinary = Veterinary::find($id);


        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/images');
            $veterinary->image = $path;
        }

        $veterinary->name = $request->name;
        $veterinary->lastname = $request->lastname;
        $veterinary->adress = $request->adress;
        $veterinary->zipcode = $request->zipcode;
        $veterinary->city = $request->city;
        $veterinary->phone = $request->phone;
        $veterinary->email = $request->email;
        $veterinary->updated_at = now();

        $veterinary->save();

        return redirect('/pets/'.$veterinary->pet_id.'/veterinaries')->with('success', 'veterinaire modifié avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $veterinary = Veterinary::findOrFail($id);
        $veterinary->delete();

        return redirect('/pets/'.$veterinary->pet_id.'/veterinaries')->with('success', 'veterinaire supprimer avec succèss');
    }
}
