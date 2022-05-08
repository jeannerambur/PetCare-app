@extends('layouts.app')

@section('content')

@include('layouts.navbar', ['title'=>'Poids', 'color'=>'#F2CA80'])


<div class="container-poids">
@foreach($poids as $poid)
    <div class="container">
        <a href="{{ route('poids.show', $poid->id)}}">
            <div class="poids-card">
                <div class="date-poids">
                    <div class="day">
                        <p>{{ date('d', strtotime($poid->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($poid->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($poid->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-poids">
                    <div class="poids">
                        <p>{{ $poid->poids}} kg</p>

                    </div>
                    <div class="duree">
                    @if( ( (strtotime($todayDate) - strtotime($poid->date) )/86400 ) < 0 )
                      <p>Dans {{ -(strtotime($todayDate) - strtotime($poid->date))/86400 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($poid->date)) /86400 ) == 0)
                        <p>Aujourd'hui </p>
                    @elseif( ( (strtotime($todayDate) - strtotime($poid->date) )/86400 ) > 365 )
                        <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($poid->date) )/86400) - 365 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($poid->date) )/86400 ) == 1)
                        <p>Il y a 1 jour</p>

                    @else
                        <p>Il y a {{ (strtotime($todayDate) - strtotime($poid->date) )/86400 }} jours</p>
                    @endif
                    </div>
                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-poid">
    <a href="{{ route('poids.create-poids', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection