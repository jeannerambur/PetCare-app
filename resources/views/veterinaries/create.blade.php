@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Ajouter Veterinaire', 'color'=>'#63A5F1'])

<div class="edit-veterinary">
  <div class="card-body">
    <form method="post" action="{{ route('veterinaries.update-veterinary', $veterinary->id ) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-name">
            <label for="name" class="name">Name :</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name"/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-lastname">
            <label for="name" class="lastname">Last Name :</label>
            <input type="text" class="form-control" name="lastname"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="adress">Adresse:</label>
            <input type="text" class="form-control" name="adress"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="zipcode">Code postal :</label>
            <input type="text" class="form-control" name="zipcode"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="city">Ville :</label>
            <input type="text" class="form-control" name="city"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="phone">Telephone :</label>
            <input type="text" class="form-control" name="phone"/>
          </div>

          <div class="form-lastname">
            <label for="name" class="email">Mail :</label>
            <input type="text" class="form-control" name="email"/>
          </div>

          <button type="submit" class="btn-submit">Modifier</button>
        </form>
  </div>
</div>

@endsection




