<template>
    <router-view></router-view>
</template>

<style>
@import '../styles/app.css'; 
</style>

<script>
    import Headermenu from './components/Headermenu.vue';
    import HeadermenuConnect from './components/HeadermenuConnect.vue';

    export default {
        name: 'App',
        components: {
            Headermenu,
            HeadermenuConnect
        }
    }
</script>