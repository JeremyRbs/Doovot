<template>
    <h1>Hey</h1>
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
