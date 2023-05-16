<template>
    <Contact />
</template>

<style>
@import '../styles/app.css'; 
</style>

<script>
    import A_Propos from './views/A_Propos.vue';
    import Contact from './views/Contact.vue';


    export default {
        name: 'App',
        components: {
            A_Propos, Contact
        }
    }
</script>
