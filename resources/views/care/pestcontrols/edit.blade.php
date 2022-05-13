@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Anti-parasites', 'color'=>'#B1A7F2'])

<div class="edit-pestcontrol">

  <div class="card-body">

    <form method="post" action="{{ route('pestcontrols.update', $pestcontrol->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
            <label for="Name" class="name">Name:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{$pestcontrol->name}}"/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose: (facultatif)</label>
            <input type="text" class="form-control" name="dose"/>
          </div>

          <div class="form-date">
            <label for="date" class="date" >Date: </label>
            <input type="date" id="date" name="date @error('date') is-invalid @enderror" required class="date-form">
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