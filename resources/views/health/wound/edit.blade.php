@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Edit Blessure', 'color'=>'#F2865E'])

<div class="edit-wound">
  <div class="card-body">
    <form method="post" action="{{ route('wounds.update', $wound->id ) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="form-name">
            <label for="name" class="name">Name :</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{ $wound->name }}"/>
            @error('date')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-date">
            <label for="date" class="date">Date:</label>
            <input type="date" id="date" name="date" class="date-form @error('date') is-invalid @enderror" required>
            @error('date')
                <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>

          <div class="form-healing-date">
            <label for="healing_date" class="healing-date">Healing date:</label>
            <input type="date" id="healing-date" name="healing_date" class="date-form">
          </div>

          <button type="submit" class="btn-submit">Modifier</button>
        </form>
  </div>
</div>

@endsection




