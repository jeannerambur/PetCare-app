@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Vermifuge', 'color'=>'#B1A7F2'])

<div class="edit-vaccine">

  <div class="card-body">

    <form method="post" action="{{ route('vaccines.update', $vaccine->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-type">
              <label for="name" class="type">Type:</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" required name="type" id="type"/>
              @error('type')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-name">
              <label for="name" class="name">Name:</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" id="name"/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose:</label>
            <input type="text" class="form-control" name="dose"/>
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