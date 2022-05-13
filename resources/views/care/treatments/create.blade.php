@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Traitement', 'color'=>'#B1A7F2'])

<div class="create-treatment">

  <div class="card-body">

      <form method="post" action="{{ route('treatments.store-treatment', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-name">
              <label for="name" class="name">Nom:</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" placeholder="Nom du soin" id="name"/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-quantite">
            <label for="dose" class="quantite">Quantité: <span>(facultatif)</span></label>
            <input type="text" class="form-control" name="quantite" placeholder="2" />
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