<!-- create.blade.php -->

@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="add-pet">
  <div class="add-pet-title">
    Add Pet
  </div>

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

      <form method="post" action="{{ route('pets.store') }}">
         @csrf
         <div class="form-row align-items-center">
            <div class="form-group col-auto my-1">
                <label class="mr-sm-2" for="type ">Type:</label>
                <select class="custom-select mr-sm-2" name="type" id="type">
                  <option selected>Choose...</option>
                  <option value="none">None</option>
                  <option value="cat">Cat</option>
                  <option value="dog">Dog</option>
                </select>
            </div>
          </div>

          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <label for="birth">Birth date:</label>
          <input type="date" id="start" name="trip-start" value="2022-04-22">

          <div class="form-group">
              <label for="sex">Sex:</label>
              <select name="sex" id="sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unknown">Unknown</option>
              </select>
          </div>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection