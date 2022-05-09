@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Edit Claw', 'color'=>'#FFB5B1'])

<div class="edit-health">

    <div class="card-body">

        <form method="post" action="{{ route('claws.update', $claw->id ) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
