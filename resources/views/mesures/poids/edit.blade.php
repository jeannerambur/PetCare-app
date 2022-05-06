@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Poids', 'color'=>'#F2CA80'])



<div class="card uper">
  <div class="card-header">
    Modifier Poids
  </div>

  <form method="post" action="{{ route('poids.update-poids', $poids->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="poids">poids :</label>
        <input type="text" class="form-control" name="poids" value="{{ $poids->poids }}"/>

        <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form">

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection