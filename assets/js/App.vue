<template>
    <Headermenu />
</template>

<style>
@import '../styles/app.css'; 
</style>

<script>
    // import HelloName from './components/HelloName.vue';
    // import Connexion from './views/Connexion.vue';
    // import Inscription from './views/Inscription.vue';
    // import Subject from './views/Subject.vue';
    import Headermenu from './components/Headermenu.vue';

    export default {
        name: 'App',
        components: {
            // HelloName, Connexion, Inscription, Subject, 
            Headermenu
        }
    }
</script>