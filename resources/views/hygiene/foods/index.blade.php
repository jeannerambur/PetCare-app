@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Alimentation', 'color'=>'#FFB5B1'])


<div class="container-food">
@foreach($foods as $food)
    <div class="container">
        <a href="{{ route('foods.show', $food->id)}}">
            <div class="food-card">
                <div class="date-food">
                    <div class="day">
                        <p>{{ date('d', strtotime($food->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($food->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($food->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-food">
                    <div class="food-type">
                        <p>{{ $food->type }}</p>
                    </div>
                    <div class="food-quantite">
                        <p>{{ $food->quantite}} g</p>
                    </div>
                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-health">
    <a href="{{ route('foods.create-food', Route::current()->parameter('id'))}}" class="btn btn-primary">Ajouter</a>
</div>

@endsection