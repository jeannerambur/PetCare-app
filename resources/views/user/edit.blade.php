@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            My Profile
        </div>
        <div class="card-body">
            <form action="{{ route('user.update-profile') }}" method="POST">
                @csrf
                @method('PUT')

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