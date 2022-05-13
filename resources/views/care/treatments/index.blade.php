@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Traitement', 'color'=>'#B1A7F2'])

<div class="container-treatment">
@foreach($treatments as $treatment)
    <div class="container">
        <a href="{{ route('treatments.show', $treatment->id)}}">
            <div class="treatment-card">
                <div class="date-treatment">
                    <div class="day">
                        <p>{{ date('d', strtotime($treatment->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($treatment->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($treatment->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-treatment">
                    <div class="treatment-name">
                        <p>{{ $treatment->name}}</p>
                    </div>

                    <div class="treatment-quantite">
                        <p>{{ $treatment->quantite}}</p>
                    </div>


                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-treatment">
    <a href="{{ route('treatments.create-treatment', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection