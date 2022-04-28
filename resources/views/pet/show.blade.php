@extends('layouts.app')

@section('content')

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">
            <div class="pet-img">
            <img src="{{ Storage::url($pet->image) }}" height="75" width="75" alt="" />
            </div>
            <div class='pet-name'>
                <h4><b>{{$pet->name}}</b></h4>
            </div>

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
            <a href="/">
                <div class="button">
                </div>
                <p>Santé</p>
            </a>
        </div>

        <div class="soins">
            <a href="/">
                <div class="button">
                </div>
                <p>Soins</p>
            </a>
        </div>

        <div class="hygiene">
            <a href="/">
                <div class="button">
                </div>
                <p>Hygiène</p>
            </a>
        </div>

        <div class="veterinaire">
            <a href="/">
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