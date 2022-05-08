@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Maladies', 'color'=>'#F2865E'])

<div class="container-diseases">
@foreach($diseases as $disease)
    <div class="container">
        <a href="{{ route('diseases.show', $disease->id)}}">
            <div class="disease-card">
                <div class="date-disease">
                    <div class="day">
                        <p>{{ date('d', strtotime($disease->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($disease->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($disease->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-disease">
                    <div class="disease-type">
                        <p>{{ $disease->type}}</p>
                    </div>

                    <div class="duree">
                    @if( ( (strtotime($todayDate) - strtotime($disease->date) )/86400 ) < 0 )
                      <p>Dans {{ -(strtotime($todayDate) - strtotime($disease->date))/86400 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($disease->date)) /86400 ) == 0)
                        <p>Aujourd'hui </p>
                    @elseif( ( (strtotime($todayDate) - strtotime($disease->date) )/86400 ) > 365 )
                        <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($disease->date) )/86400) - 365 }} jours</p>
                    @elseif( ( (strtotime($todayDate) - strtotime($disease->date) )/86400 ) == 1)
                        <p>Il y a 1 jour</p>

                    @else
                        <p>Il y a {{ (strtotime($todayDate) - strtotime($disease->date) )/86400 }} jours</p>
                    @endif
                    </div>
                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-disease">
    <a href="{{ route('diseases.create-disease', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection