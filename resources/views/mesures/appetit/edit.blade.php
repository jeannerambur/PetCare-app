

@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Add Appetit', 'color'=>'#F2CA80'])


<div class="edit-appetit">

  <div class="card-body">

    <form method="post" action="{{ route('appetit.update', $appetit->id ) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

        <div class="form-appetit">
            <label for="appetit" class="appetit" >Appetit:</label>
            <input type="text" class="form-control" name="appetit" value="{{ $appetit->appetit }}" id="appetit"/>
        </div>

        <div class="form-date">
              <label for="date" class="date" >Date:</label>
              <input type="date" id="date" name="date" class="date-form">
        </div>
        <div class="form-heure">
              <label for="heure" class="heure">Heure:</label>
              <input type="text" class="form-control" name="heure" value="{{ $appetit->heure }}" id="heure"/>
        </div>

        <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>

    </form>
  </div>
</div>
@endsection