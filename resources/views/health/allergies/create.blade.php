@extends('layouts.app')
@section('content')
@include('layouts.navbar', ['title'=>'Add Allergie', 'color'=>'#F2865E'])

<div class="create-allergy">

  <div class="card-body">

      <form method="post" action="{{ route('allergies.store-allergy', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf


         <div class="form-type">
            <label for="type" class="type">Type d'allergie :</label>
            <select name="type" id="type">
              <option value=""> <font-awesome-icon icon="fa-solid fa-angle-down"/> Selectionnez le type d'allergie </option>
              <option value="Allergie alimentaire">Allergie Alimentaire</option>
              <option value="Allergie dermatologique">Allergie Dermatologique</option>
              <option value="Allergie inconnue">Allergie Inconnue</option>
              <option value="Allergie autre">Autre Allergie</option>
            </select>
          </div>

          <div class="form-name">
              <label for="name" class="name">Nom: (facultatif)</label>
              <input type="text" class="form-control" name="name" placeholder="nom" id="name"/>
          </div>

          <div class="form-date">
              <label for="date" class="date" >Date:</label>
              <input type="date" id="date" name="date"  placeholder="yyy-mm-dd" class="date-form @error('date') is-invalid @enderror" required>
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