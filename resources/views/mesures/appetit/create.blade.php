@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Add Appetit', 'color'=>'#F2CA80'])


<div class="create-appetit">

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('appetit.store-appetit', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

         <div class="form-appetit">
            <label for="appetit" class="appetit">Type d'appetit :</label>
            <select name="appetit" id="appetit" required>
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
              <label for="heure" class="heure">Heure: <span>(facultatif)</span></label>
              <input type="text" class="form-control" name="heure" placeholder="16" id="heure"/>


          </div>

          <button type="submit" class="btn-submit">Ajouter</button>

      </form>
  </div>
</div>
@endsection