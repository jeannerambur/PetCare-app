@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Vétérinaire', 'color'=>'#63A5F1'])

<div class="veterinary-details">
          <veterinarycard :veterinary="{{ $veterinary }}"></veterinarycard>

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