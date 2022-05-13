@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuge', 'color'=>'#B1A7F2'])

<div class="create-dewormer">

  <div class="card-body">

      <form method="post" action="{{ route('dewormers.store-dewormer', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <div class="form-type">
            <label for="type" class="type">Type de vermifuges :</label>
            <select name="type" id="type" required>
              <option value=""> <font-awesome-icon icon="fa-solid fa-angle-down"/> Selectionnez le type de vermifuge </option>
              <option value="Comprimés">Comprimés</option>
              <option value="Pipettes">Pipettes</option>
              <option value="liquides">Liquides</option>
              <option value="Injections">Injections</option>
              <option value="Autre">Autre</option>
            </select>
          </div>

          <div class="form-name">
              <label for="name" class="name">Nom:</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" placeholder="Nom du vermifuge" id="name"/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose: (facultatif)</label>
            <input type="text" class="form-control" placeholder="2" name="dose"/>
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