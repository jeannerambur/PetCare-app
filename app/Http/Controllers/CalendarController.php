<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EventList;
use App\Http\Resources\EventResource;


class CalendarController extends Controller
{

    public function index()
    {
        return EventResource::collection(Event::all());
    }
    public function calendarEvents(Request $request)
    {
        $eventList = EventList::get(['event_name','event_start']);
        return response()->json(["My events" => $eventList]);
    }
}