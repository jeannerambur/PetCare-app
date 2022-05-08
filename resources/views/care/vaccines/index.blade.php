@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuges', 'color'=>'#B1A7F2'])

<div class="container-vaccine">
@foreach($vaccines as $vaccine)
    <div class="container">
        <a href="{{ route('vaccines.show', $vaccine->id)}}">
            <div class="vaccine-card">
                <div class="date-vaccine">
                    <div class="day">
                        <p>{{ date('d', strtotime($vaccine->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($vaccine->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($vaccine->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-vaccine">
                    <div class="vaccine-name">
                        <p>{{ $vaccine->name}}</p>
                    </div>

                    <div class="vaccine-dose">
                        <p>{{ $vaccine->dose}}</p>
                    </div>


                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-treatment">
    <a href="{{ route('vaccines.create-vaccine', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection