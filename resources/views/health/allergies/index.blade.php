
@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Allergie', 'color'=>'#F2865E'])


<div class="container-allergy">
@foreach($allergies as $allergy)
    <div class="container">
        <a href="{{ route('allergies.show', $allergy->id)}}">
            <div class="allergy-card">
                <div class="date-allergy">
                    <div class="day">
                        <p>{{ date('d', strtotime($allergy->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($allergy->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($allergy->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-allergy">
                    <div class="allergy">
                        <p>{{ $allergy->type}}</p>
                    </div>

                    <div class="duree">
                    @if( ( (strtotime($todayDate) - strtotime($allergy->date) )/86400 ) < 0 )
                      <p>Dans {{ -(strtotime($todayDate) - strtotime($allergy->date))/86400 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($allergy->date)) /86400 ) == 0)
                        <p>Aujourd'hui </p>
                    @elseif( ( (strtotime($todayDate) - strtotime($allergy->date) )/86400 ) > 365 )
                        <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($allergy->date) )/86400) - 365 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($allergy->date) )/86400 ) == 1)
                        <p>Il y a 1 jour</p>

                    @else
                        <p>Il y a {{ (strtotime($todayDate) - strtotime($allergy->date) )/86400 }} jours</p>
                    @endif
                    </div>
                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-allergy">
    <a href="{{ route('allergies.create-allergy', Route::current()->parameter('id')) }}" class="btn-submit">Ajouter</a>
</div>

@endsection