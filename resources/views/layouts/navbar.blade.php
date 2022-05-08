
<v-app-bar
    color= "{{$color}}"
    dense
    elevation="3"
    prominent
    >

    <div class="navbar-container">
        @if (Route::currentRouteName() == 'pets.index')
            <div class="user-profile">
                <a class="nav-link" href="{{ route('user.index')}}">
                    <img src="{{asset('/storage/images/'.Auth::user()->image)}}" alt="user-img">
                </a>
            </div>
            @else
            <div class="previous">
                <a href="{{ URL::previous() }}"><iconcomponent></iconcomponent></a>
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
                            <a class="nav-link" href="{{ URL::to( '/pets') }}">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('user.index')}}">My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
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