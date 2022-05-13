@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'My Profile', 'color'=>'#827EF2'])

<div class="container">
    <div class="edit-profile">
        <div class="card-body">
            <form action="{{ route('user.update-profile') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="pet-image-form">
            <div class="pet-image">
              <img src="{{ Storage::url($user->image) }}" height="200" width="200" alt="" />
            </div>
            <div class="image-form">
              <label for="file-input">
                  <font-awesome-icon icon="fa-solid fa-camera" :style="{ color: 'white' }"/>
              </label>
              <input id="file-input" type="file" name="image" class="form-control">
            </div>

          </div>

                <div class="name-form">
                    <label for="name">Name</label>
                    <input type="text" class='form-control' name='name' id="name" value="{{ $user->name }}">
                </div>

                <div class="email-form">
                    <label for="name">Last Name</label>
                    <input type="text" class='form-control' name='lastname' id="name" value="{{ $user->lastname }}">
                </div>


                <div class="phone-form">
                    <label for="name">Tel</label>
                    <input type="text" class='form-control' name='phone_number' id="name" value="{{ $user->phone_number }}">
                </div>


                <div class="name-form">
                    <label for="name">Phone</label>
                    <input type="text" class='form-control' name='email' id="name" value="{{ $user->email }}">
                </div>


                <div class="about-form">
                    <label for="about">About Me</label>
                    <textarea class='form-control' name='about' id="about" cols="5" rows="5">{{ $user->about }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    Update Profile
                </button>

            </form>
        </div>
    </div>
</div>
@endsection