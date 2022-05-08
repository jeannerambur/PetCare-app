@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Edit Pet', 'color'=>'#827EF2'])

<div class="form-edit-pet">

  <div class="form-container">

      <form method="post" action="{{ route('pets.update', $pet->id ) }}" enctype="multipart/form-data">

          <div class="pet-image-form">
            <div class="pet-image">
              <img src="{{ Storage::url($pet->image) }}" height="200" width="200" alt="" />
            </div>
            <div class="image-form">
              <label for="file-input">
                  <font-awesome-icon icon="fa-solid fa-camera" :style="{ color: 'white' }"/>
              </label>
              <input id="file-input" type="file" name="image" class="form-control">
            </div>

          </div>
          <div class="name-form">
              @csrf
              @method('PATCH')
              <input type="text" class="form-control" name="name" value="{{ $pet->name }}"/>
          </div>

          <div class="birth-date">
            <label for="birth">Birth date : </label>
            <input type="date" id="birth" name="birth" class="birth-form" placeholder="yyyy-mm-dd">
          </div>



          <div class="form-group">
            <input type="radio" id="female" name="sex" value="female" checked>
            <input type="radio" id="male" name="sex" value="male">

            <div class="getfatnone">
              GET F<span>A<span>A</span><span>I</span></span>T
            </div>
            <div>
              <label id="venus" for="female"><font-awesome-icon icon="fa-solid fa-venus" :style="{ color: 'white' }" /></label>
              <label id="mars" for="male"><font-awesome-icon icon="fa-solid fa-mars" :style="{ color: 'white' }"/></label>
            </div>

          </div>
          <button type="submit" class="btn-submit">Confirm</button>
      </form>
  </div>
</div>
@endsection