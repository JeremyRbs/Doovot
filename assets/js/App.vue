<template>
    <h1>Hey</h1>
    <HelloName />
    <h1>Bastien je veux me marier avec toi (c'est pas louis qui a ecrit)(je test git branch)</h1>
    <HelloName />
</template>

<style>
@import '../styles/app.css'; 
</style>

<script>
    import HelloName from './components/HelloName.vue';

    export default {
        name: 'App',
        components: {
            HelloName
        }
    }
</script>
