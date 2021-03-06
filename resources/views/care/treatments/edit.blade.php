@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Traitement', 'color'=>'#B1A7F2'])

<div class="edit-treatment">

  <div class="card-body">

    <form method="post" action="{{ route('treatments.update', $treatment->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <div class="form-name">
            <label for="Name" class="name">Nom:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" placeholder="{{$treatment->name}}"/>
            @error('name')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-quantite">
            <label for="dose" class="quantite">Quantité: <span>(facultatif)</span></label>
            <input type="text" class="form-control" name="quantite" placeholder="2"/>
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