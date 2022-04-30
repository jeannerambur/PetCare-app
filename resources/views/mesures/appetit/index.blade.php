@extends('layouts.app')

@section('content')

<a href="{{ route('appetit.create-appetit', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($appetits as $appetit)
<div class="container-appetit">
<a href="{{ route('appetit.show', $appetit->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $appetit->date}}</h1>
        </div>
        <div class="info-appetit">
            <div class="appetit">
                <p>{{ $appetit->appetit}}</p>
            </div>
            <div class="appetit-heure">
                <p>Repas de {{ $appetit->heure}}h</p>
            </div>
        </div>

    </div>
</a>

<div>


@endforeach


@endsection