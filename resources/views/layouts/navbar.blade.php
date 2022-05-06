<v-app-bar
    color= "{{$color}}"
    dense
    elevation="3"
    prominent
    >

    <div class="navbar-container">
        <div class="previous">
            <a href="{{ URL::previous() }}"><iconcomponent></iconcomponent></a>
        </div>
        <div class="title">
            <v-toolbar-title class="white--text">{{ $title }}</v-toolbar-title>

        </div>
        <div class="menu-burger">
            <font-awesome-icon icon="fa-solid fa-bars" :style="{color: 'white'}"/>
        </div>

    </div>


</v-app-bar>