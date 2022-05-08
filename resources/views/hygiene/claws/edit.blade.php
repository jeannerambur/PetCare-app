@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Edit Claw', 'color'=>'#FFB5B1'])

<div class="edit-claw">

  <form method="post" action="{{ route('claws.update', $claw->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form" placeholder="yyyy-mm-dd">

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection
