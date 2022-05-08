<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Bath;
use App\Models\Claw;
use App\Models\Dent;
use App\Models\Food;
use App\Models\Groom;
use App\Models\Poids;
use App\Models\Wound;
use App\Models\Litter;
use App\Models\Allergy;
use App\Models\Appetit;
use App\Models\Disease;
use App\Models\History;
use App\Models\Vaccine;
use App\Models\Dewormer;
use App\Models\Treatment;
use App\Models\PestControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::where('user_id',Auth::id())->get();
        return view('history.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appetitHistories = Appetit::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $poidsHistories = Poids::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $allergyHistories = Allergy::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $woundHistories = Wound::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $diseaseHistories = Disease::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $pestcontrolHistories = PestControl::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $treatmentHistories = Treatment::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $vaccineHistories = Vaccine::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $dewormerHistories = Dewormer::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $bathHistories = Bath::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $clawHistories = Claw::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $dentHistories = Dent::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $litterHistories = Litter::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $foodHistories = Food::where('pet_id',$id)->orderBy('date', 'desc')->get();
        $groomHistories = Groom::where('pet_id',$id)->orderBy('date', 'desc')->get();

        $array = $appetitHistories->mergeRecursive($poidsHistories)
                                  ->mergeRecursive($allergyHistories)
                                  ->mergeRecursive($woundHistories)
                                  ->mergeRecursive($diseaseHistories)
                                  ->mergeRecursive($pestcontrolHistories)
                                  ->mergeRecursive($treatmentHistories)
                                  ->mergeRecursive($vaccineHistories)
                                  ->mergeRecursive($dewormerHistories)
                                  ->mergeRecursive($bathHistories)
                                  ->mergeRecursive($clawHistories)
                                  ->mergeRecursive($dentHistories)
                                  ->mergeRecursive($litterHistories)
                                  ->mergeRecursive($foodHistories)
                                  ->mergeRecursive($groomHistories);


        $sorted = $array->sortByDesc('date');

        return view('history.show', compact('sorted'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\History  $history
     * @return \Illuminate\Http\Response
     */
    public function destroy(History $history)
    {
        //
    }
}
