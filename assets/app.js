/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

import { VueElement, createApp } from 'vue'
import App from './js/App.vue'

import './styles/app.css'
import 'bootstrap/dist/css/bootstrap.css'
import bootstrap from 'bootstrap/dist/js/bootstrap.bundle.js'

Vue.use(VueRouter);

createApp(App).use(bootstrap).mount('#vue-app');
VueElement.prototype.$userId = ''
VueElement.prototype.$userName = ''
VueElement.prototype.$userIsAdmin = ''
