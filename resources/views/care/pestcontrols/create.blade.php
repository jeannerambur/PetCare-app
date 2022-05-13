@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Anti-parasites', 'color'=>'#B1A7F2'])

<div class="create-pestcontrol">

  <div class="card-body">

      <form method="post" action="{{ route('pestcontrols.store-pestcontrol', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <div class="form-type">
            <label for="type" class="type">Type antiparasitaire :</label>
            <select name="type" id="type" required>
              <option value=""> <font-awesome-icon icon="fa-solid fa-angle-down"/> Selectionnez le type d'anti-parasites </option>
              <option value="Acarien">Acarien</option>
              <option value="Aoûtat">Aoûtat</option>
              <option value="Cheylétielle">Cheylétielle</option>
              <option value="Demodex">Demodex</option>
              <option value="Gale des oreilles">Gale des oreilles</option>
              <option value="Gale du corps">Gale du corps</option>
              <option value="Malassezia">Malassezia</option>
              <option value="Myaze">Myaze</option>
              <option value="Phlebotome">Phlebotome</option>
              <option value="Puce">Puce</option>
              <option value="Teigne">Teigne</option>
              <option value="Tique">Tique</option>
              <option value="Toxoplasmose">Toxoplasmose</option>
              <option value="Autre">Autre</option>
            </select>
          </div>

          <div class="form-name">
              <label for="name" class="name">Nom:</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" placeholder="name" id="name"/>
              @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose: (facultatif)</label>
            <input type="text" class="form-control @error('dose') is-invalid @enderror" required name="dose"/>
            @error('dose')
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