<template>
    <h1>Hey</h1>
    <HelloName />
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

    export default {
        name: 'App',
        components: {
            HelloName, Connexion, Inscription, Subject, Dashboard
        }
    }
</script>