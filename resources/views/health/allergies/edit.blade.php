@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Allergie', 'color'=>'#F2865E'])

<div class="edit-allergy">

  <div class="card-body">

    <form method="post" action="{{ route('allergies.update', $allergy->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-type">
            <label for="type" class="type">Type d'allergie :</label>
            <select name="type" id="type" required>
              <option value=""> <font-awesome-icon icon="fa-solid fa-angle-down"/> Selectionnez le type d'allergie </option>
              <option value="Allergie alimentaire">Allergie Alimentaire</option>
              <option value="Allergie dermatologique">Allergie Dermatologique</option>
              <option value="Allergie inconnue">Allergie Inconnue</option>
              <option value="Allergie autre">Autre Allergie</option>
            </select>
          </div>

          <div class="form-name">
            <label for="Name" class="name">Nom:</label>
            <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-date">
            <label for="date" class="date" >Date:</label>
            <input type="date" id="date" name="date" class="date-form @error('date') is-invalid @enderror" value="2014-02-08" required>
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