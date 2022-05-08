@extends('layouts.app')

@section('content')


@include('layouts.navbar', ['title'=>'Add Pet', 'color'=>'#827EF2'])

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="add-pet">


  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('pets.store') }}" enctype="multipart/form-data">
         @csrf

         <div class="pet-image-form">
            <div class="pet-image">
              <img src="{{asset('/storage/images/'.Auth::user()->image)}}" height="200" width="200" alt="" />
            </div>
            <div class="image-form">
              <label for="file-input">
                  <font-awesome-icon icon="fa-solid fa-camera" :style="{ color: 'white' }"/>
              </label>
              <input id="file-input" type="file" name="image" class="form-control">
            </div>

          </div>
          <div class="name-form">
              <input type="text" class="form-control" name="name" placeholder="Name">
          </div>

          <div class="birth-date">
            <label for="birth">Birth date : </label>
            <input type="date" id="birth" name="birth" class="birth-form" placeholder="yyyy-mm-dd">
          </div>

          <div class="form-group">
            <input type="radio" id="female" name="sex" value="female">
            <input type="radio" id="male" name="sex" value="male">

            <div class="getfatnone">
              GET F<span>A<span>A</span><span>I</span></span>T
            </div>
            <div>
              <label id="venus" for="female"><font-awesome-icon icon="fa-solid fa-venus" :style="{ color: 'white' }" /></label>
              <label id="mars" for="male"><font-awesome-icon icon="fa-solid fa-mars" :style="{ color: 'white' }"/></label>
            </div>

          </div>



          <button type="submit" class="btn-submit">Ajouter</button>
      </form>
  </div>
</div>
@endsection