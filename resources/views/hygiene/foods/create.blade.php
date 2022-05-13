@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Alimentation', 'color'=>'#FFB5B1'])

<div class="create-food">

  <div class="card-body">

      <form method="post" action="{{ route('foods.store-food', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-type">
              <label for="type" class="type" >Type:</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" required name="type" placeholder="Type d'alimentation"/>
              @error('type')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-marque">
            <label for="marque" class="marque">Marque:(facultatif)</label>
            <input type="text" class="form-control" name="marque" placeholder="Royal Canin"/>
          </div>

          <div class="form-quantite">
            <label for="quantite" class="quantite">Quantité: (facultatif)</label>
            <input type="text" class="form-control" name="quantite" placeholder="en gramme"/>
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
          <button type="submit" class="btn btn-submit">Ajouter</button>
      </form>
  </div>
</div>
@endsection