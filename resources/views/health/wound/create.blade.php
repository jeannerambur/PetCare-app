@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Blessure', 'color'=>'#F2865E'])

<div class="create-wound">
  <div class="card-body">

      <form method="post" action="{{ route('wounds.store-wound', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <div class="form-name">
            <label for="name" class="name">Nom :</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nom de la blessure" required name="name"/>
            @error('name')
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
            <label for="healing_date" class="healing-date">Date de guérison: (facultatif)</label>
            <input type="date" id="healing-date" name="healing_date" class="date-form">
          </div>

          <button type="submit" class="btn-submit">Ajouter</button>
      </form>
  </div>
</div>
@endsection