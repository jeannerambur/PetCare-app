@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add bath', 'color'=>'#FFB5B1'])

<a href="{{ route('baths.create-bath', Route::current()->parameter('id'))}}" class="btn btn-primary">Add</a>


@foreach($baths as $bath)
<div class="container-bath">
    <a href="{{ route('baths.show', $bath->id)}}">
        <div class="date-bath">
            <h1>{{ $bath->date}}</h1>
        </div>
    </a>
<div>

@endforeach
@endsection