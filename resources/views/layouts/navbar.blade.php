
<v-app-bar
    color= "{{$color}}"
    dense
    elevation="3"
    prominent
    >
    <div class="navbar-container">
        @if (Route::currentRouteName() == 'pets.index')
            <div class="user-profile">
                <p>PetCare</p>
            </div>
            @else
            <div class="previous">
                @if (Route::currentRouteName() == 'pets.show')
                <a href="{{ URL::to('/pets') }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'mesure')
                <a href="{{ URL::to('/pets/'. Request::segment(2)) }}"><iconcomponent></iconcomponent></a>
                @elseif ((Route::currentRouteName() == 'appetit') or (Route::currentRouteName() == 'poids'))
                <a href="{{ URL::to('/pets/'. Request::segment(2)).'/mesures' }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'health')
                <a href="{{ URL::to('/pets/'. Request::segment(2)) }}"><iconcomponent></iconcomponent></a>
                @elseif ((Route::currentRouteName() == 'allergies') or (Route::currentRouteName() == 'diseases') or (Route::currentRouteName() == 'wounds'))
                <a href="{{ URL::to('/pets/'. Request::segment(2)).'/health' }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'care')
                <a href="{{ URL::to('/pets/'. Request::segment(2)) }}"><iconcomponent></iconcomponent></a>
                @elseif ((Route::currentRouteName() == 'dewormers') or (Route::currentRouteName() == 'vaccines') or (Route::currentRouteName() == 'treatments') or (Route::currentRouteName() == 'pestcontrols'))
                <a href="{{ URL::to('/pets/'. Request::segment(2)).'/care' }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'hygiene')
                <a href="{{ URL::to('/pets/'. Request::segment(2)) }}"><iconcomponent></iconcomponent></a>
                @elseif ((Route::currentRouteName() == 'baths') or (Route::currentRouteName() == 'foods') or (Route::currentRouteName() == 'claws') or (Route::currentRouteName() == 'litters') or (Route::currentRouteName() == 'grooms') or (Route::currentRouteName() == 'dents'))
                <a href="{{ URL::to('/pets/'. Request::segment(2)).'/hygiene' }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'veterinaries')
                <a href="{{ URL::to('/pets/'. Request::segment(2)) }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'user.index')
                <a href="{{ URL::to('/pets') }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'veterinaries.show-veterinary')
                <a href="{{ URL::to('/pets/'. Request::segment(2)).'/veterinaries' }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'history.index')
                <a href="{{ URL::to('/pets') }}"><iconcomponent></iconcomponent></a>
                @elseif (Route::currentRouteName() == 'history.show')
                <a href="{{ URL::to('/history') }}"><iconcomponent></iconcomponent></a>
                @else
                <a href="{{ URL::previous() }}"><iconcomponent></iconcomponent></a>
                @endif
            </div>
        @endif
        <div class="title">
            <v-toolbar-title class="white--text">{{ $title }}</v-toolbar-title>

        </div>
        <burger-menu @toggle-menu="menuActive = !menuActive" :active="menuActive"></burger-menu>
        <transition  @before-enter="beforeEnter" @enter="enter" @leave="leave" :css="false">
            <div id="navbarNav" v-show="menuActive">
                <div class="col-xl-6 offset-xl-6">
                    <ul class="navbar-nav float-xl-right">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ URL::to( '/pets') }}">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.index')}}">Mon profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ URL::to( '/history') }}">Historique</a>
                        </li>
                        <li class="nav-item-logout">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Deconnexion') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </transition>
    </div>
</v-app-bar>