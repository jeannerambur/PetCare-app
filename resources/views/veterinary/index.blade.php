@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
  .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>

<div class="container-user-profile">
@foreach($veterinary as $veterinary)
    <div class="user-details">

    {{$veterinary->name}}

    </div>

</div>
@endforeach

@endsection