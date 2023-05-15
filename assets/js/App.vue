<template>
    <HeadermenuConnect />
</template>

<style>
@import '../styles/app.css'; 
</style>

<script>
    import HelloName from './components/HelloName.vue';
    import Connexion from './views/Connexion.vue';
    import Inscription from './views/Inscription.vue';
    import Subject from './views/Subject.vue';
    import Dashboard from './views/Dashboard.vue';
    import Vote from './views/Vote.vue';
    import Services from './views/Services.vue';
    import Headermenu from './components/Headermenu.vue';
    import HeadermenuConnect from './components/HeadermenuConnect.vue';

    export default {
        name: 'App',
        components: {
            HelloName, Connexion, Inscription, Subject, Dashboard, Vote, Services, Headermenu, HeadermenuConnect
        }
    }
</script>