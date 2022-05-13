/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue').default;

import Velocity from 'velocity-animate'
import vuetify from './vuetify';
import Burger from './components/Burger'

import "@mdi/font/css/materialdesignicons.css"

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import specific icons */
import { faAngleLeft, faBars, faCamera, faVenus, faMars, faPen, faClockRotateLeft, faEnvelope, faLocationDot, faTruckMedical, faAngleDown} from '@fortawesome/free-solid-svg-icons'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* add icons to the library */
library.add(faAngleLeft, faBars, faCamera, faVenus, faMars, faPen, faClockRotateLeft, faEnvelope, faLocationDot, faTruckMedical, faAngleDown)

/* add font awesome icon component */
Vue.component('font-awesome-icon', FontAwesomeIcon)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('welcome', require('./components/Welcome.vue').default);

Vue.component('iconcomponent', require('./components/IconComponent.vue').default);

//Vue.component('burgermenu', require('./components/BurgerMenu.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    vuetify,
    data: {
        isMobile: window.innerWidth <= 991,
        globalOverlay: {
            active: false
        },
        menuActive: window.innerWidth > 991
    },
    methods: {
        beforeEnter () {
            if (this.isMobile) {
                this.globalOverlay.active = true
            }
        },
        enter (el, done) {
            Velocity(el, {
                marginLeft: 0
            }, {
                complete: done
            }, {
                duration: 300
            })
        },
        leave (el, done) {
            Velocity(el, {
                marginLeft: '-100%'
            }, {
                complete: done
            }, {
                duration: 300
            }).then(() => {
                if (this.isMobile) {
                    this.globalOverlay.active = false
                }
            })
        },
    },
    components: {
        'burger-menu': Burger,
    }
})
