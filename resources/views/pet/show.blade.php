@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Mon animal', 'color'=>'#827EF2'])

  <div class="pet-details">
    <div class="card-pet-detail">
        <div class="pet-container">
            <div class="pet-img">
            <img src="{{ $pet->image }}" height="75" width="75" alt="" />
            </div>
            <div class='pet-name-id'>
                <div class='pet-name'>
                    <p>{{$pet->name}}</p>
                </div>
                @if(($pet->sex) == 'male')
                <div class="pet-sex">
                    <font-awesome-icon icon="fa-solid fa-mars" :style="{ color: '#63A5F1' }"/>
                </div>
                @else
                <div class="pet-sex">
                    <font-awesome-icon icon="fa-solid fa-venus" :style="{ color: '#FFB5B1' }"/>
                </div>
                @endif
            </div>
            <div class="pet-infos">
                <div class="birth-date">
                    @if((\Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%y')) == 0)
                        @if((\Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%m')) == 0)
                        <p>{{ \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%d jours')}}</p>
                        @else
                            <p>{{ \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%m mois et %d jours')}}</p>
                        @endif
                    @else
                        @if( \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%y') == 1 )
                        <p>{{ \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%y an et %m mois')}}</p>
                        @else
                        <p>{{ \Carbon\Carbon::parse($pet->birth)->diff(\Carbon\Carbon::now())->format('%y ans et %m mois')}}</p>
                        @endif
                   @endif
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
            <a href="{{ route('mesure', $pet->id)}}">
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