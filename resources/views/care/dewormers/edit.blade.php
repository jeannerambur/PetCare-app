@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuge', 'color'=>'#B1A7F2'])

<div class="edit-dewormer">

  <div class="card-body">

    <form method="post" action="{{ route('dewormers.update', $dewormer->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
            <label for="Name" class="name">Name:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" placeholder='{{$dewormer->name}}'/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-dose">
            <label for="dose" class="dose">Dose:</label>
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

          <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
  </div>

</div>
@endsection