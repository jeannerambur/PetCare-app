@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'My Profile', 'color'=>'#827EF2'])


<div class="container-user-profile">
    <div class="user-details">
        <div class="user-img">
          <img src="{{ Storage::url(Auth::user()->image ) }}" height="75" width="75" alt="" />
        </div>
        <div class="description-user">
          {{ Auth::user()->about }}
        </div>

        <div class="general-infos">
          <div class="title">
            <p>General information</p>
          </div>
          <div class="description">
            <div class="username">
              <div class="logo">
                <p>Name: </p>
              </div>
              <div class="name">
                {{ Auth::user()->name }}
              </div>
            </div>
            <div class="username">
              <div class="logo">
                <p>Last name: </p>
              </div>
              <div class="name">
                {{ Auth::user()->lastname }}
              </div>
            </div>
          </div>

        </div>

        <div class="contact-infos">
          <div class="title">
            <p>Contacts</p>
          </div>
          <div class="description">
            <div class="email">
              <div class="logo">
                <p>Email: </p>
              </div>
              <div class="mail">
                {{ Auth::user()->email }}
              </div>
            </div>
            <div class="phone-number">
              <div class="logo">
                <p>Tel: </p>
              </div>
              <div class="phone">
                {{ Auth::user()->phone_number }}
              </div>
            </div>
          </div>
        </div>


    </div>
    <div class="edit-user">
        <a href="/user/profile/edit" class="btn btn-primary">Edit</a>
    </div>
</div>

@endsection