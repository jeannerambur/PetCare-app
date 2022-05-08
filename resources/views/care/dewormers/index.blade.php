@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuges', 'color'=>'#B1A7F2'])

<div class="container-dewormers">
@foreach($dewormers as $dewormer)
    <div class="container">
        <a href="{{ route('dewormers.show', $dewormer->id)}}">
            <div class="dewormer-card">
                <div class="date-dewormer">
                    <div class="day">
                        <p>{{ date('d', strtotime($dewormer->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($dewormer->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($dewormer->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-dewormer">
                    <div class="dewormer-name">
                        <p>{{ $dewormer->name}}</p>
                    </div>

                    <div class="dewormer-type">
                        <p>{{ $dewormer->type}}</p>
                    </div>


                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-dewormer">
    <a href="{{ route('dewormers.create-dewormer', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection