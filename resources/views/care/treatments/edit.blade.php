@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Vermifuge', 'color'=>'#B1A7F2'])

<div class="edit-treatment">

  <div class="card-body">

    <form method="post" action="{{ route('treatments.update', $treatment->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <div class="form-name">
            <label for="Name" class="name">Name:</label>
            <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-quantite">
            <label for="dose" class="quantite">Quantite:</label>
            <input type="text" class="form-control" name="quantite"/>
          </div>

          <div class="form-date">
            <label for="date" class="date" >Date:</label>
            <input type="date" id="date" name="date" class="date-form">
          </div>

          <div class="btn-submit">
            <button type="submit" class="btn btn-primary">Modifier</button>
        </div>
    </form>
  </div>

</div>
@endsection