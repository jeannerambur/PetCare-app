
@extends('layouts.app')

@section('content')
<navbarmesures :title="'Appetit'"></navbarmesures>



<div class="container-appetit">
@foreach($appetits as $appetit)
    <div class="container">
        <a href="{{ route('appetit.show', $appetit->id)}}">
            <div class="appetit-card">
                <div class="date-appetit">
                    <p>{{ $appetit->date}}</p>
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
    </div>
@endforeach
</div>


<div class="add-appetit">
    <a href="{{ route('appetit.create-appetit', Route::current()->parameter('id'))}}" class="btn btn-primary">Ajouter</a>
</div>

@endsection