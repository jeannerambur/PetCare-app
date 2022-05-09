@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Vermifuge', 'color'=>'#B1A7F2'])

<div class="edit-pestcontrol">

  <div class="card-body">

    <form method="post" action="{{ route('pestcontrols.update', $pestcontrol->id ) }}" enctype="multipart/form-data">
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
            <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name"/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose:</label>
            <input type="text" class="form-control @error('dose') is-invalid @enderror" required name="dose"/>
            @error('dose')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-date">
            <label for="date" class="date" >Date:</label>
            <input type="date" id="date" name="date @error('date') is-invalid @enderror" required class="date-form">
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