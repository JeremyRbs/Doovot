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

import { createRouter, createWebHistory } from 'vue-router';
import Home from '../assets/js/views/Home.vue';
import Connexion from '../assets/js/views/Connexion.vue';
import Inscription from '../assets/js/views/Inscription.vue';
import Services from '../assets/js/views/Services.vue';
import Contact from '../assets/js/views/Contact.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/connexion',
            name: 'Connexion',
            component: Connexion
        },
        {
            path: '/inscription',
            name: 'Inscription',
            component: Inscription
        },
        {
            path: '/services',
            name: 'Services',
            component: Services
        },
        {
            path: '/a-propos',
            name: '',
            component: Home
        },
        {
            path: '/contact',
            name: 'Contact',
            component: Contact
        }
    ]
});

const app = createApp(App);
app.use(router);
app.use(bootstrap);
app.mount('#vue-app');

VueElement.prototype.$userId = ''
VueElement.prototype.$userName = ''
VueElement.prototype.$userIsAdmin = ''
