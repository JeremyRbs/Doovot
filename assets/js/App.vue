<template>
    <h1>Bonjour l'application !</h1>
    <p>
        <!-- utilisez le composant router-link pour la navigation. -->
        <!-- spécifiez le lien en le passant à la prop `to` -->
        <!-- `<router-link>` sera rendu en tag `<a>` par défaut -->
        <router-link to="/foo">Aller à Foo</router-link>
        <router-link to="/bar">Aller à Bar</router-link>
    </p>

    <router-view></router-view>
</template>

<style>
router-link{
    display: flex;
    flex-direction: column;
}
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