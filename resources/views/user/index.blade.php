@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>

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
        <a href="/user/profile/edit" class="btn btn-primary">Edit</a>
    </div>
</div>

@endsection