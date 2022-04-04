@extends('layouts.app')

@section('content')


<form action="{{route('pets.store')}}" method="post" class="form-example">
@csrf
  <div class="name">
    <label for="name">Enter Pet's name: </label>
    <input type="text" name="name" id="name" required>
    <input type="submit" value='Enter'>
  </div>
</form>


@endsection
