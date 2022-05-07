@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Traitements', 'color'=>'#B1A7F2'])

<a href="{{ route('treatments.create-treatment', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($treatments as $treatment)
<div class="container-appetit">
<a href="{{ route('treatments.show', $treatment->id)}}">
    <div class="appetit-card">
        <div class="date-appetit">
            <h1>{{ $treatment->name}}</h1>
        </div>
    </div>
<div>

@endforeach



@endsection