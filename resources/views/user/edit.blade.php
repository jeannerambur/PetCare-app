@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'My Profile', 'color'=>'#827EF2'])

<div class="container">
    <div class="edit-profile">
        <div class="card-body">
            <form action="{{ route('user.update-profile') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <strong>Pet Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="Post Title">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <img src="{{asset('/storage/images/'.Auth::user()->image)}}" height="200" width="200" alt="" />
                </div>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class='form-control' name='name' id="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
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