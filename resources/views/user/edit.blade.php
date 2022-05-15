@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Mon Profil', 'color'=>'#827EF2'])

<div class="container">
    <div class="edit-profile">
        <div class="card-body">
            <form action="{{ route('user.update-profile') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="name-form">
                    <label for="name">Nom</label>
                    <input type="text" class='form-control' name='name' id="name" value="{{ $user->name }}">
                </div>

                <div class="email-form">
                    <label for="name">Prénom</label>
                    <input type="text" class='form-control' name='lastname' id="name" value="{{ $user->lastname }}">
                </div>


                <div class="phone-form">
                    <label for="name">Tel</label>
                    <input type="text" class='form-control' name='phone_number' id="name" value="{{ $user->phone_number }}">
                </div>


                <div class="name-form">
                    <label for="name">Email</label>
                    <input type="text" class='form-control' name='email' id="name" value="{{ $user->email }}">
                </div>


                <div class="about-form">
                    <label for="about">A propos</label>
                    <textarea class='form-control' name='about' id="about" cols="5" rows="5">{{ $user->about }}</textarea>
                </div>

                <button type="submit" class="btn btn-submit">
                    Modifier
                </button>

            </form>
        </div>
    </div>
</div>
@endsection