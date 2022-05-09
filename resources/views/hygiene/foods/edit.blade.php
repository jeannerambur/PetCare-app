@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Edit Food', 'color'=>'#FFB5B1'])

<div class="edit-food">
  <div class="card-body">

    <form method="post" action="{{ route('foods.update', $food->id ) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-type">
              <label for="type" class="type">Type:</label>
              <input type="text" class="form-control @error('date') is-invalid @enderror" required name="type"/>
              @error('type')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
          <div class="form-marque">
            <label for="marque" class="marque">Marque: (facultatif)</label>
            <input type="text" class="form-control" name="marque"/>
          </div>

          <div class="form-quantite">
            <label for="quantite" class="quantite">Quantite: (facultatif)</label>
            <input type="text" class="form-control" name="quantite"/>
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

          <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
          </div>

        </form>
  </div>
</div>
@endsection
