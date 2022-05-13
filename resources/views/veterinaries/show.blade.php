@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Veterinaire', 'color'=>'#63A5F1'])

<div class="veterinary-details">
          <div class='veterinary-card'>
            <div class="veterinary-img">
              <img src="{{ Storage::url($veterinary->image) }}" height="75" width="75" alt="" />
            </div>
            <div class="veterinary-name">
              {{$veterinary->name}} {{$veterinary->lastname}}
            </div>
            <div class="veterinary-contacts">
                <div class="veterinary-mail">
                  <font-awesome-icon icon="fa-solid fa-envelope" :style="{ color: 'white' }"/>
                </div>
                <div class="veterinary-location">
                  <font-awesome-icon icon="fa-solid fa-location-dot" :style="{ color: 'white' }"/>
                </div>
                <div class="veterinary-urgency">
                  <font-awesome-icon icon="fa-solid fa-truck-medical" :style="{ color: 'white' }"/>
                </div>
            </div>
          </div>

          <div class="infos-details">
            <div class="veterinary-address">
                <p>Adresse</p>
                <p>{{$veterinary->adress}}</p>
            </div>
            <div class="veterinary-zipcode">
                <p>Code Postal</p>
                <p>{{$veterinary->zipcode}}</p>
            </div>
            <div class="veterinary-city">
                <p>Ville</p>
                <p>{{$veterinary->city}}</p>
            </div>
            <div class="veterinary-phone">
                <p>Telephone</p>
                <p>{{$veterinary->phone}}</p>
            </div>
          </div>

      </div>

    <div class="edit-veterinary">
        <a href="{{ route('veterinaries.edit', $veterinary->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{ route('veterinaries.destroy', $veterinary->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>
  </div>

@endsection