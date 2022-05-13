@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Ajouter Poids', 'color'=>'#F2CA80'])

<div class="create-poids">
  <div class="card-body">

    <form method="post" action="{{ route('poids.store-poids', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
      @csrf

        <div class="form-poids">
            <label for="poids" class="poids">Poids: (kg)</label>
            <input type="text" class="form-control @error('poids') is-invalid @enderror" required name="poids"/>
            @error('poids')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
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