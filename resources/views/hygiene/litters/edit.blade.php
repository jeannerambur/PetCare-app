@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Edit Litter', 'color'=>'#FFB5B1'])

<div class="edit-litter">

  <form method="post" action="{{ route('litters.update', $litter->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form" placeholder="yyyy-mm-dd">

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection
