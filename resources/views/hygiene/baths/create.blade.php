@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Create bath', 'color'=>'#FFB5B1'])

<div class="add-bath">

  <div class="card-body">

      <form method="post" action="{{ route('baths.store-bath', Route::current()->parameter('id'))}}" enctype="multipart/form-data">
         @csrf

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form" placeholder="yyyy-mm-dd">


          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection