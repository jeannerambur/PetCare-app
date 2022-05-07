@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'My Profile', 'color'=>'#827EF2'])


<div class="container-user-profile">
    <div class="user-details">
        <div class="user-img">
          <img src="{{asset('/storage/images/'.Auth::user()->image)}}" height="75" width="75" alt="" />
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
                {{ Auth::user()->name }}
              </div>
            </div>
          </div>

        </div>

        <div class="contact-infos">
          <div class="title">
            <p>Contacts</p>
          </div>
          <div class="description">
            <div class="contact">
              <div class="logo">
                <p>Email: </p>
              </div>
              <div class="mail">
                {{ Auth::user()->email }}
              </div>
            </div>
          </div>
        </div>


    </div>
    <div class="edit-user">
        <a href="/user/profile/edit" class="btn btn-primary"><font-awesome-icon icon="fa-solid fa-pen" /></a>
    </div>
</div>

@endsection