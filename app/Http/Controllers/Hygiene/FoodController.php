<?php

namespace App\Http\Controllers\Hygiene;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $foods = Food::where('pet_id',$id)->get();
       return view('hygiene.foods.index', compact('foods'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hygiene.foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $food = new Food;

        $food->type = $request->type;
        $food->pet_id = $id;
        $food->marque = $request->marque;
        $food->quantite = $request->quantite;
        $food->date = $request->date;
        $food->created_at = now();
        $food->updated_at = now();

        $food->save();

        return redirect('/pets/'.$food->pet_id.'/hygiene/foods')->with('success', 'food créer avec succèss');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);
        return view('hygiene.foods.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::findOrFail($id);

        return view('hygiene.foods.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Dd($request->all());
        $food = Food::find($id);

        $food->type = $request->type;
        $food->marque = $request->marque;
        $food->quantite = $request->quantite;
        $food->date = $request->date;
        $food->updated_at = now();

        $food->save();

        return redirect('/pets/'.$food->pet_id.'/hygiene/foods')->with('success', 'food modifié avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::findOrFail($id);
        $food->delete();

        return redirect('/pets/'.$food->pet_id.'/hygiene/foods')->with('success', 'food supprimer avec succèss');
    }
}
