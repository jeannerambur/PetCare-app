@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Create groom', 'color'=>'#FFB5B1'])

<div class="create-health">

  <div class="card-body">

      <form method="post" action="{{ route('grooms.store-groom', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

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