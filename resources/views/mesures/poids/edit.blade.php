@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Poids', 'color'=>'#F2CA80'])



<div class="edit-poids">

  <div class="card-body">

    <form method="post" action="{{ route('poids.update-poids', $poids->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-poids">
          <label for="poids" class="poids" >Poids:</label>
          <input type="text" class="form-control" name="poids" value="{{ $poids->poids }}"/>
        </div>

        <div class="form-date">
          <label for="date" class="date" >Date:</label>
          <input type="date" id="date" name="date" class="date-form">
        </div>

        <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>

  </div>

</div>
@endsection