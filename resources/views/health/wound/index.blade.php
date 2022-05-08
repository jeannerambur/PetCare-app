@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Blessures', 'color'=>'#F2865E'])

<div class="container-wound">
@foreach($wounds as $wound)
    <div class="container">
        <a href="{{ route('wounds.show', $wound->id)}}">
            <div class="wound-card">
                <div class="date-wound">
                    <div class="day">
                        <p>{{ date('d', strtotime($wound->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($wound->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($wound->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-wound">
                    <div class="wound-name">
                        <p>{{ $wound->name}}</p>
                    </div>

                    <div class="duree">
                    @if( ( (strtotime($todayDate) - strtotime($wound->date) )/86400 ) < 0 )
                      <p>Dans {{ -(strtotime($todayDate) - strtotime($wound->date))/86400 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($wound->date)) /86400 ) == 0)
                        <p>Aujourd'hui </p>
                    @elseif( ( (strtotime($todayDate) - strtotime($wound->date) )/86400 ) > 365 )
                        <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($wound->date) )/86400) - 365 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($wound->date) )/86400 ) == 1)
                        <p>Il y a 1 jour</p>

                    @else
                        <p>Il y a {{ (strtotime($todayDate) - strtotime($wound->date) )/86400 }} jours</p>
                    @endif
                    </div>
                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-disease">
    <a href="{{ route('wounds.create-wound', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection