@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Vétérinaire', 'color'=>'#63A5F1'])

@foreach($veterinaries as $veterinary)
<div class="container-veterinary-profile">
  <a href="{{ route('veterinaries.show', $veterinary->id)}}">
      <div class="veterinary-details">
          <div class='veterinary-card'>
            <div class="veterinary-name">
              {{$veterinary->name}} {{$veterinary->lastname}}
            </div>
            <div class="veterinary-contacts">
                <div class="veterinary-mail">
                  <div class="logo">
                    <font-awesome-icon icon="fa-solid fa-envelope" :style="{ color: 'white' }"/>
                  </div>
                  <div class="email">
                    <p>{{$veterinary->email}}</p>
                  </div>
                </div>
                <div class="veterinary-location">
                  <div class="logo">
                    <font-awesome-icon icon="fa-solid fa-location-dot" :style="{ color: 'white' }"/>
                  </div>
                  <div class="city">
                    <p>{{$veterinary->city}}</p>
                  </div>
                </div>
                <div class="veterinary-urgency">
                  <div class="logo">
                  <font-awesome-icon icon="fa-solid fa-truck-medical" :style="{ color: 'white' }"/>
                  </div>
                  <div class="phone">
                    <p>{{$veterinary->phone}}</p>
                  </div>
                </div>
            </div>
          </div>
      </div>
  </a>
  </div>
  @endforeach
</div>

<div class="add-veterinary">
    <a href="{{ route('veterinaries.create-veterinary', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection