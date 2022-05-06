@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Add Appetit', 'color'=>'#F2CA80'])

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="create-appetit">

  <div class="card-body">

      <form method="post" action="{{ route('appetit.store-appetit', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-appetit">
              <label for="appetit" class="appetit" >Appetit:</label>
              <input type="text" class="form-control" name="appetit" placeholder="Selection de l’appétit" id="appetit"/>
          </div>

          <div class="form-date">
              <label for="date" class="date" >Date:</label>
              <input type="date" id="date" name="date" class="date-form">
          </div>

          <div class="form-heure">
              <label for="heure" class="heure">Heure:</label>
              <input type="text" class="form-control" name="heure" placeholder="16" id="heure"/>
          </div>

          <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
      </form>
  </div>
</div>
@endsection