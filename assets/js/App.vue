<template>
    <h1>Hey</h1>
    <HelloName />
    <HelloName />
</template>

<style>
@import '../styles/app.css'; 
</style>

<script>
    import Connexion from './components/Connexion.vue';

    export default {
        name: 'App',
        components: {
            Connexion
        }
    }
</script>
