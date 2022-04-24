@extends('layouts.app')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier l'animal
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('pets.update', $pet->id ) }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Name :</label>
              <input type="text" class="form-control" name="name" value="{{ $pet->name }}"/>
          </div>

          <div class="form-row align-items-center">
            <div class="form-group col-auto my-1">
                <label class="mr-sm-2" for="type ">Type:</label>
                <select class="custom-select mr-sm-2" name="type" id="type">
                  <option selected>Choose...</option>
                  <option value="none">None</option>
                  <option value="cat">Cat</option>
                  <option value="dog">Dog</option>
                </select>
            </div>
          </div>


          <label for="birth">Birth date:</label>
          <input type="date" id="birth" name="birth" class="birth-form" value="{{ old('birth') }}">

          <div class="form-group">
              <label for="sex">Sex:</label>
              <select name="sex" id="sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="unknown">Unknown</option>
              </select>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Post Image:</strong>
                 <input type="file" name="image" class="form-control" placeholder="Post Title">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
              <img src="{{ Storage::url($pet->image) }}" height="200" width="200" alt="" />
            </div>
        </div>

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection