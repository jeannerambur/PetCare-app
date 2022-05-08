@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add food', 'color'=>'#FFB5B1'])

<a href="{{ route('foods.create-food', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($foods as $food)
<div class="container-appetit">
<a href="{{ route('foods.show', $food->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $food->marque}}</h1>
        </div>
    </div>
</a>
<div>

@endforeach



@endsection