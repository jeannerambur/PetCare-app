@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Vétérinaire', 'color'=>'#63A5F1'])

@foreach($veterinaries as $veterinary)
<div class="container-veterinary-profile">
  <a href="{{ route('veterinaries.show-veterinary', $veterinary->id)}}">
    <veterinarycard :veterinary="{{ $veterinary }}"></veterinarycard>
  </a>
  </div>
  @endforeach
</div>

<div class="add-veterinary">
    <a href="{{ route('veterinaries.create-veterinary', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection