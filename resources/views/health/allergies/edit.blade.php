@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Allergie', 'color'=>'#F2865E'])

<div class="edit-allergy">

  <div class="card-body">

    <form method="post" action="{{ route('allergies.update', $allergy->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <div class="form-type">
              <label for="type" class='type'>Type:</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" required name="type"/>
              @error('type')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-name">
            <label for="Name" class="name">Name:</label>
            <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-date">
            <label for="date" class="date" >Date:</label>
            <input type="date" id="date" name="date" class="date-form @error('date') is-invalid @enderror" required>
            @error('date')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
  </div>

</div>
@endsection