@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Dents', 'color'=>'#FFB5B1'])

<div class="container-health">
@foreach($dents as $dent)
    <div class="container">
        <a href="{{ route('dents.show', $dent->id)}}">
            <div class="health-card">
                <div class="date-health">
                    <div class="day">
                        <p>{{ date('d', strtotime($dent->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($dent->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($dent->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-health">
                    <div class="health-title-name">
                        <p>{{ $dent->title_name}}</p>
                    </div>
                    <div class="duree">
                        @if( ( (strtotime($todayDate) - strtotime($dent->date) )/86400 ) < 0 )
                        <p>Dans {{ -(strtotime($todayDate) - strtotime($dent->date))/86400 }} jours</p>
                        @elseif( ( (strtotime($todayDate) - strtotime($dent->date)) /86400 ) == 0)
                            <p>Aujourd'hui </p>
                        @elseif( ( (strtotime($todayDate) - strtotime($dent->date) )/86400 ) > 365 )
                            <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($dent->date) )/86400) - 365 }} jours</p>
                        @elseif( ( (strtotime($todayDate) - strtotime($dent->date) )/86400 ) == 1)
                            <p>Il y a 1 jour</p>

                        @else
                            <p>Il y a {{ (strtotime($todayDate) - strtotime($dent->date) )/86400 }} jours</p>
                        @endif
                    </div>
                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-appetit">
    <a href="{{ route('dents.create-dent', Route::current()->parameter('id'))}}" class="btn btn-primary">Ajouter</a>
</div>

@endsection