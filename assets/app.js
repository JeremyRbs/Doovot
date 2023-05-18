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
import Home from '../assets/js/views/Home';
import Connexion from '../assets/js/views/Connexion.vue';
import Inscription from '../assets/js/views/Inscription.vue';
import Services from '../assets/js/views/Services.vue';
import Contact from '../assets/js/views/Contact.vue';
import Vote from '../assets/js/views/Vote.vue';
import Dashboard from '../assets/js/views/Dashboard.vue';
import Subject from '../assets/js/views/Subject.vue';
import A_Propos from '../assets/js/views/A_Propos.vue';
import Compte from '../assets/js/views/Compte.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/app',
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
            path: '/compte',
            name: 'Compte',
            component: Compte
        },
        {
            path: '/services',
            name: 'Services',
            component: Services
        },
        {
            path: '/a_propos',
            name: 'APropos',
            component: A_Propos
        },
        {
            path: '/contact',
            name: 'Contact',
            component: Contact
        },
        {
            path: '/home',
            name: 'Home',
            component: Home,
        },
        {
            path: '/dashboard',
            name: 'Dashboard',
            component: Dashboard
        },
        {
            path: '/subject',
            name: 'Subject',
            component: Subject
        },
        {
            path: '/vote/:id',
            name: 'Vote',
            component: Vote
        }
    ]
});

createApp(App).use(router).use(bootstrap).mount('#vue-app');

VueElement.prototype.$userId = ''
VueElement.prototype.$userName = ''
VueElement.prototype.$userIsAdmin = ''
