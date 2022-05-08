@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Add groom', 'color'=>'#FFB5B1'])

<div class="container-health">
@foreach($baths as $bath)
    <div class="container">
        <a href="{{ route('baths.show', $bath->id)}}">
            <div class="health-card">
                <div class="date-health">
                    <div class="day">
                        <p>{{ date('d', strtotime($bath->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($bath->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($bath->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-health">
                    <div class="health-title-name">
                        <p>{{ $bath->title_name}}</p>
                    </div>
                    <div class="duree">
                        @if( ( (strtotime($todayDate) - strtotime($bath->date) )/86400 ) < 0 )
                        <p>Dans {{ -(strtotime($todayDate) - strtotime($bath->date))/86400 }} jours</p>
                        @elseif( ( (strtotime($todayDate) - strtotime($bath->date)) /86400 ) == 0)
                            <p>Aujourd'hui </p>
                        @elseif( ( (strtotime($todayDate) - strtotime($bath->date) )/86400 ) > 365 )
                            <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($bath->date) )/86400) - 365 }} jours</p>
                        @elseif( ( (strtotime($todayDate) - strtotime($bath->date) )/86400 ) == 1)
                            <p>Il y a 1 jour</p>

                        @else
                            <p>Il y a {{ (strtotime($todayDate) - strtotime($bath->date) )/86400 }} jours</p>
                        @endif
                    </div>
                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-appetit">
    <a href="{{ route('baths.create-bath', Route::current()->parameter('id'))}}" class="btn btn-primary">Ajouter</a>
</div>

@endsection