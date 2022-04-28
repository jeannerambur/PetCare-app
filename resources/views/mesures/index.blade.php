@extends('layouts.app')

@section('content')

<div class="container-home-page">

    <div class="button-mesures">
        <div class="button-appetit"></div>
        <a href="{{ route('appetit', $pet->id)}}">Appetit</a>
        </div>

        <div class="button-poids">
          <button onclick="window.location.href = '/';">Poids</button>
        </div>
        </div>
    </div>
</div>
@endsection