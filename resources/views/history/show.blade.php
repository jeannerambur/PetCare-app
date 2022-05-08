@extends('layouts.app')

@section('content')

  <div class="pet-details">
    <div class="card-pet-detail">
        @foreach($sorted as $ar)
            <div class="pet-container">

                <div class='pet-name'>
                    <h4><b>{{$ar->title_name}}</b></h4>
                    <h4><b>{{$ar->date}}</b></h4>
                    <h4><b>{{$ar->appetit}}</b></h4>
                    <h4><b>{{$ar->poids}}</b></h4>
                    <h4><b>{{$ar->name}}</b></h4>
                </div>

                @if($ar->title_name == 'Blessure')
                    <a href="{{ route('wounds.show', $ar->id)}}">Hey</a>
                @elseif($ar->title_name == 'Griffe')
                    <a href="{{ route('claws.show', $ar->id)}}">Griffe</a>
                @endif
            </div>
            @endforeach
      </div>


    </div>




@endsection