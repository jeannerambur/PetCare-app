@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'Vermifuges', 'color'=>'#B1A7F2'])

<div class="container-pestcontrol">
@foreach($pestcontrols as $pestcontrol)
    <div class="container">
        <a href="{{ route('pestcontrols.show', $pestcontrol->id)}}">
            <div class="pestcontrol-card">
                <div class="date-pestcontrol">
                    <div class="day">
                        <p>{{ date('d', strtotime($pestcontrol->date)) }}</p>
                    </div>
                    <div class="month_year">
                        <div class="month">
                            <p>{{ date('M', strtotime($pestcontrol->date)) }}</p>
                        </div>
                        <div class="year">
                            <p>{{ date('y', strtotime($pestcontrol->date)) }}</p>
                        </div>
                    </div>

                </div>
                <div class="info-pestcontrol">
                    <div class="pestcontrol-name">
                        <p>{{ $pestcontrol->name}}</p>
                    </div>

                    <div class="pestcontrol-type">
                        <p>{{ $pestcontrol->type}}</p>
                    </div>


                </div>

            </div>
        </a>
    </div>
@endforeach
</div>


<div class="add-pestcontrol">
    <a href="{{ route('pestcontrols.create-pestcontrol', Route::current()->parameter('id'))}}" class="btn-submit">Ajouter</a>
</div>

@endsection