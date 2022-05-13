@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Mon animal', 'color'=>'#827EF2'])

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">
            <div class="pet-img">
            <img src="{{ Storage::url($pet->image) }}" height="75" width="75" alt="" />
            </div>
            <div class='pet-name-id'>
                <div class='pet-name'>
                    <p>{{$pet->name}}</p>
                </div>
                @if(($pet->sex) == 'male')
                <div class="pet-sex">
                    <font-awesome-icon icon="fa-solid fa-mars" />
                </div>
                @else
                <div class="pet-sex">
                    <font-awesome-icon icon="fa-solid fa-venus" />
                </div>
                @endif
            </div>
            <div class="pet-infos">
                <div class="birth-date">
                   <p>{{ \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');}}</p>
                </div>

                @if(!$pet->num_id)
                <div class="pet_num-id">
                   <p></p>
                </div>
                @else
                <div class="pet_num-id">
                   <p>N°{{$pet->num_id }}</p>
                </div>
                @endif
            </div>

        </div>
      </div>

    <div class="care-button">
        <div class="mesures">
            <a href="{{ route('mesures', $pet->id)}}">
                <div class="button">
                    <font-awesome-icon icon="fa-thin fa-weight-scale" />
                </div>
                <p>Mesures</p>
            </a>
        </div>


        <div class="sante">
            <a href="{{ route('health', $pet->id)}}">
                <div class="button">
                    <font-awesome-icon icon="fa-solid fa-heart-pulse" />
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
            <a href="{{ route('veterinaries', $pet->id)}}">
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