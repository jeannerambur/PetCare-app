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
            <div class="button">
            </div>
            <p>Mesures</p>
        </div>

        <div class="sante">
            <div class="button">
            </div>
          <p>Santé</p>
        </div>

        <div class="soins">
            <div class="button">
            </div>
          <p>Soins</p>
        </div>

        <div class="hygiene">
            <div class="button">
            </div>
          <p>Hygiène</p>
        </div>

        <div class="veterinaire">
            <div class="button">
            </div>
          <p>Vétérinaire</p>
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