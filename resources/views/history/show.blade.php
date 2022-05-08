@extends('layouts.app')

@section('content')
@include('layouts.navbar', ['title'=>'History', 'color'=>'#827EF2'])


  <div class="history">
    <div class="card-history">
        @foreach($sorted as $ar)
            <div class="container">

                @if($ar->title_name == 'Blessure')
                <div class="history-container">
                    <a href="{{ route('wounds.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Griffe')
                <div class="history-container">
                    <a href="{{ route('claws.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Poids')
                <div class="history-container">
                    <a href="{{ route('poids.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Appetit')
                <div class="history-container">
                    <a href="{{ route('appetit.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Allergie')
                <div class="history-container">
                    <a href="{{ route('allergies.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Bain')
                <div class="history-container">
                    <a href="{{ route('baths.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Dent')
                <div class="history-container">
                    <a href="{{ route('dents.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Vermifuge')
                <div class="history-container">
                    <a href="{{ route('dewormers.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Maladie')
                <div class="history-container">
                    <a href="{{ route('diseases.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Alimentation')
                <div class="history-container">
                    <a href="{{ route('foods.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Toilettage')
                <div class="history-container">
                    <a href="{{ route('grooms.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Nettoyage litière')
                <div class="history-container">
                    <a href="{{ route('litters.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Anti-parasites')
                <div class="history-container">
                    <a href="{{ route('pestcontrols.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Traitement')
                <div class="history-container">
                    <a href="{{ route('treatments.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @elseif($ar->title_name == 'Vaccin')
                <div class="history-container">
                    <a href="{{ route('vaccines.show', $ar->id)}}">
                        <div class="container">
                            <div class="date-wound">
                                <div class="day">
                                    <p>{{ date('d', strtotime($ar->date)) }}</p>
                                </div>
                                <div class="month_year">
                                    <div class="month">
                                        <p>{{ date('M', strtotime($ar->date)) }}</p>
                                    </div>
                                    <div class="year">
                                        <p>{{ date('y', strtotime($ar->date)) }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="infos">
                                <div class="history-name">
                                    <p>{{ $ar->title_name}}</p>
                                </div>

                                <div class="duree">
                                @if( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) < 0 )
                                <p>Dans {{ -(strtotime($todayDate) - strtotime($ar->date))/86400 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date)) /86400 ) == 0)
                                    <p>Aujourd'hui </p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) > 365 )
                                    <p>Il y a 1 an et {{ ((strtotime($todayDate) - strtotime($ar->date) )/86400) - 365 }} jours</p>
                                @elseif( ( (strtotime($todayDate) - strtotime($ar->date) )/86400 ) == 1)
                                    <p>Il y a 1 jour</p>
                                @else
                                    <p>Il y a {{ (strtotime($todayDate) - strtotime($ar->date) )/86400 }} jours</p>
                                @endif
                                </div>
                            </div>
                        </div>

                    </a>
                </div>

                @endif
            </div>
            @endforeach
      </div>


    </div>




@endsection