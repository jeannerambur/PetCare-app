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
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $request->validate([
            'birth' => 'required',
            'image' => 'required'
        ]);

        //Dd($request->all());

        $path = $request->file('image')->store('public/images');
        $pet = new Pet;

        $pet->name = $request->name;
        $pet->user_id = Auth::id();
        $pet->sex = $request->sex;
        $pet->birth = $request->birth;
        $pet->image = $path;
        $pet->created_at = now();
        $pet->updated_at = now();

        $pet->save();

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
        return view('pet.show')->with('pet', $pet);

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

        $pet = Pet::find($id);
        $birthday = Carbon::parse($request->date_of_birth)->format('Y-m-d');

        if($request->hasFile('image')){
            $path = $request->file('image')->store('public/images');
            $pet->image = $path;
        }

        $pet->name = $request->name;
        $pet->user_id = Auth::id();
        $pet->sex = $request->sex;
        $pet->birth = $request->birth;
        $pet->updated_at = now();

        $pet->save();

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
