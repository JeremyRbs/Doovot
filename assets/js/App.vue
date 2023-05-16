<template>
    <A_Propos />
</template>

<style>
@import '../styles/app.css'; 
</style>

<script>
    import HelloName from './components/HelloName.vue';
    import A_Propos from './views/A_Propos.vue';

    export default {
        name: 'App',
        components: {
            HelloName, A_Propos
        }
    }
</script>
