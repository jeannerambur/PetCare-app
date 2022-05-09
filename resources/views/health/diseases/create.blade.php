@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add Maladie', 'color'=>'#F2865E'])

<div class="create-disease">
  <div class="card-body">

      <form method="post" action="{{ route('diseases.store-disease', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

        <div class="form-name">
          <label for="name" class="name">Name : (facultatif)</label>
          <input type="text" class="form-control" name="name"/>

        </div>

        <div class="form-type">
          <label for="type" class="type">Type :</label>
          <input type="text" class="form-control @error('type') is-invalid @enderror" required name="type"/>
          @error('type')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
        </div>

        <div class="form-date">
          <label for="date" class="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form @error('date') is-invalid @enderror" required>
          @error('date')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
        </div>

        <div class="form-healing-date">
          <label for="healing_date" class="healing-date">Healing date: (facultatif)</label>
          <input type="date" id="healing-date" name="healing_date" class="date-form">
        </div>

        <button type="submit" class="btn-submit">Ajouter</button>
      </form>
  </div>
</div>
@endsection