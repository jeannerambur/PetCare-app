@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Proprietaire</td>
          <td>Name</td>
          <td>Type</td>
          <td>Birthday</td>
          <td>Sex</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{$pet->id}}</td>
            <td>{{$pet->user_id}}</td>
            <td>{{$pet->name}}</td>
            <td>{{$pet->type}}</td>
            <td>{{$pet->date_of_birth}}</td>
            <td>{{$pet->sex}}</td>
            <td><a href="{{ route('pets.edit', $pet->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('pets.destroy', $pet->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection