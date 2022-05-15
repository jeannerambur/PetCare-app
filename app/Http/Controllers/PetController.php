<?php

namespace App\Http\Controllers;

use Image;
use Carbon\Carbon;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePetRequest;
use App\Http\Requests\UpdatePetRequest;
use Illuminate\Support\Facades\Storage;

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


        $path = Storage::disk('s3')->put('images', $request->image);
        $path = Storage::disk('s3')->url($path);

        $pet = new Pet;

        $pet->name = $request->name;
        $pet->user_id = Auth::id();
        $pet->sex = $request->sex;
        $pet->birth = $request->birth;
        $pet->num_id = $request->num_id;
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

        $path = Storage::disk('s3')->put('images', $request->image);
        $path = Storage::disk('s3')->url($path);

        $pet->name = $request->name;
        $pet->user_id = Auth::id();
        $pet->sex = $request->sex;
        $pet->birth = $request->birth;
        $pet->image = $path;
        $pet->num_id = $request->num_id;
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
