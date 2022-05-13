@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Veterinaire', 'color'=>'#63A5F1'])

<div class="edit-veterinary-form">
  <div class="card-body">
    <form method="post" action="{{ route('veterinaries.update-veterinary', $veterinary->id ) }}" enctype="multipart/form-data">

          <div class="pet-image-form">
            <div class="pet-image">
              <img src="{{ Storage::url($veterinary->image) }}" height="200" width="200" alt="" />
            </div>
            <div class="image-form">
              <label for="file-input">
                  <font-awesome-icon icon="fa-solid fa-camera" :style="{ color: 'white' }"/>
              </label>
              <input id="file-input" type="file" name="image" class="form-control">
            </div>

          </div>
          <div class="form-name">
            @csrf
            @method('PUT')
            <label for="name" class="name">Name :</label>
            <input type="text" class="form-control" required name="name" value="{{ $veterinary->name }}"/>

          <div class="form-lastname">
            <label for="name" class="lastname">Last Name :</label>
            <input type="text" class="form-control" name="lastname" value="{{ $veterinary->lastname }}"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="adress">Adresse:</label>
            <input type="text" class="form-control" name="adress" value="{{ $veterinary->adress }}"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="zipcode">Code postal :</label>
            <input type="text" class="form-control" name="zipcode" value="{{ $veterinary->zipcode }}"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="city">Ville :</label>
            <input type="text" class="form-control" name="city" value="{{ $veterinary->city }}"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="phone">Telephone :</label>
            <input type="text" class="form-control" name="phone" value="{{ $veterinary->phone }}"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="email">Mail :</label>
            <input type="text" class="form-control" name="email" value="{{ $veterinary->email }}"/>
          </div>

          <button type="submit" class="btn-submit">Modifier</button>
        </form>
  </div>
</div>

@endsection




