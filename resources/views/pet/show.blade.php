@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Pet Details', 'color'=>'#827EF2'])

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">
            <div class="pet-img">
            <img src="{{ Storage::url($pet->image) }}" height="75" width="75" alt="" />
            </div>
            <div class='pet-name'>
                <p>{{$pet->name}}</p>
            </div>
            {{ $pet->created_at->format('d') }}

        </div>
      </div>

    <div class="care-button">
        <div class="mesures">
            <a href="{{ route('mesures', $pet->id)}}">
                <div class="button">
                </div>
                <p>Mesures</p>
            </a>
        </div>


        <div class="sante">
            <a href="{{ route('health', $pet->id)}}">
                <div class="button">
                </div>
                <p>Santé</p>
            </a>
        </div>

        <div class="soins">
            <a href="{{ route('care', $pet->id)}}">
                <div class="button">
                </div>
                <p>Soins</p>
            </a>
        </div>

        <div class="hygiene">
            <a href="{{ route('hygiene', $pet->id)}}">
                <div class="button">
                </div>
                <p>Hygiène</p>
            </a>
        </div>

        <div class="veterinaire">
            <a href="{{ route('veterinary', $pet->id)}}">
                <div class="button">
                </div>
                <p>Veterinaire</p>
            </a>
        </div>

    </div>
    <div class="edit-pet">
        <a href="{{ route('pets.edit', $pet->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('pets.destroy', $pet->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
  </div>

@endsection