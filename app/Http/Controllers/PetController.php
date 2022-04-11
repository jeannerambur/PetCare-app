<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use Image;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::where('user_id',Auth::id())->get();
        return view('pet/index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pet/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $birthday = Carbon::parse($request->date_of_birth)->format('Y-m-d');

        $pet = Pet::create([
            "name" => $request->name,
            "user_id" => Auth::id(),
            "type" => $request->type,
            "sex" => $request->sex,
            "date_of_birth" => $birthday,
            "created_at" => now(),
            "updated_at" => now()
            ]);

        return redirect('/pets')->with('success', 'Animal créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pet = Pet::find($id);
        return view('pets.show')->with('pet', $pet);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = Pet::findOrFail($id);

        return view('pet/edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetRequest  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Pet::whereId($id)->update([
            "name" => $request->name,
            "type" => $request->type,
            "sex" => $request->sex,
            "date_of_birth" => $request->date_of_birth->format('Y-m-d'),
            "updated_at" => now()
        ]);

        return redirect('/pets')->with('success', 'Animal mis à jour avec succèss');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect('/pets')->with('success', 'Animal supprimer avec succèss');
    }
}
