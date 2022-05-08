@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Edit Food', 'color'=>'#FFB5B1'])

<div class="card uper">
  <div class="card-header">
    Modifier l'Alimentation
  </div>

  <form method="post" action="{{ route('foods.update', $food->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
              <label for="type">Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <label for="marque">Marque:</label>
          <input type="text" class="form-control" name="marque"/>

          <label for="quantite">Quantite:</label>
          <input type="text" class="form-control" name="quantite"/>

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection
