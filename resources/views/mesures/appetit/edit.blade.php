

@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Add Appetit', 'color'=>'#F2CA80'])


<div class="edit-appetit">

  <div class="card-body">

    <form method="post" action="{{ route('appetit.update', $appetit->id ) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

      <div class="form-appetit">
            <label for="appetit" class="appetit">Type d'appetit :</label>
            <select name="appetit" id="appetit" value="{{$appetit->appetit}}" required>
              <option value=""> <font-awesome-icon icon="fa-solid fa-angle-down"/> Selectionnez l'appetit </option>
              <option value="Bon">Bon</option>
              <option value="Moyen">Moyen</option>
              <option value="Peu">Peu</option>
              <option value="Pas du tout">Pas du tout</option>
            </select>
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
        <div class="form-heure">
              <label for="heure" class="heure">Heure: (facultatif)</label>
              <input type="text" class="form-control" name="heure" value="{{ $appetit->heure }}" id="heure"/>
        </div>

        <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>

    </form>
  </div>
</div>
@endsection