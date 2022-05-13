
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Dents', 'color'=>'#FFB5B1'])


<div class="health-details">
    <div class="card-health-detail">
        <div class="health-container">

            <div class='health-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($dent->date)) }}</p>
            </div>

        </div>
      </div>



    <div class="edit-pet">
        <a href="{{ route('dents.edit', $dent->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('dents.destroy', $dent->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

</div>

@endsection