@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Edit dent', 'color'=>'#FFB5B1'])

<div class="edit-dent">

  <form method="post" action="{{ route('dents.update', $dent->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

          <label for="date">Date:</label>
          <input type="date" id="date" name="date" class="date-form" placeholder="yyyy-mm-dd">

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
</div>
@endsection
