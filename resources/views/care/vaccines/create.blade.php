@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Vermifuge', 'color'=>'#B1A7F2'])

<div class="create-vaccine">

  <div class="card-body">

      <form method="post" action="{{ route('vaccines.store-vaccine', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <div class="form-type">
              <label for="name" class="type">Type:</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" required name="type" placeholder="Type" id="type"/>
              @error('type')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-name">
              <label for="name" class="name">Name:</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" placeholder="name" id="name"/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose: <span>(facultatif)</span></label>
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


          <button type="submit" class="btn-submit">Ajouter</button>

      </form>
  </div>
</div>
@endsection