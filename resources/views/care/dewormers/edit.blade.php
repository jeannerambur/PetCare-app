@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Vermifuge', 'color'=>'#B1A7F2'])

<div class="edit-dewormer">

  <div class="card-body">

    <form method="post" action="{{ route('dewormers.update', $dewormer->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <div class="form-type">
              <label for="type" class='type'>Type:</label>
              <input type="text" class="form-control" name="type"/>
          </div>

          <div class="form-name">
            <label for="Name" class="name">Name:</label>
            <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose:</label>
            <input type="text" class="form-control" name="dose"/>
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