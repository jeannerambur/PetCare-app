
@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Blessure', 'color'=>'#F2865E'])


  <div class="wound-details">
    <div class="card-wound-detail">
        <div class="wound-container">

            <div class='wound-name'>
                <p><span>Name </span> {{$wound->name}}</p>
            </div>

            <div class='wound-date'>
                <p><span>Date</span> {{ date('d/m/y', strtotime($wound->date)) }}</p>
            </div>

            <div class='wound-healing-date'>
                <p><span>Healing date</span> {{ date('d/m/y', strtotime($wound->healing_date)) }}</p>
            </div>

        </div>
      </div>


    <div class="edit-pet">
        <a href="{{ route('wounds.edit', $wound->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('wounds.destroy', $wound->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>


@endsection