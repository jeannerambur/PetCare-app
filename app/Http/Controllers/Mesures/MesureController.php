<?php

namespace App\Http\Controllers\Mesures;

use Carbon\Carbon;
use App\Models\Pet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MesureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pets = Pet::where('user_id',Auth::id())->get();
        return view('mesures.index', compact('pets'));
    }



}
