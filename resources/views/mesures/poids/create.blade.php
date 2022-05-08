@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Add Poids', 'color'=>'#F2CA80'])

<div class="create-poids">
  <div class="card-body">

    <form method="post" action="{{ route('poids.store-poids', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
      @csrf

        <div class="form-poids">
            <label for="poids" class="poids">poids:</label>
            <input type="text" class="form-control" name="poids"/>
        </div>

        <div class="form-date">
            <label for="date" class="date" >Date:</label>
            <input type="date" id="date" name="date" class="date-form">
        </div>

        <button type="submit" class="btn-submit">Ajouter</button>

    </form>
  </div>
</div>

@endsection