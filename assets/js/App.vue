<template>
    <h1>Hey</h1>
    <HelloName />
</template>

<script>
    import HelloName from './components/HelloName.vue';

    export default {
        name: 'App',
        components: {
            HelloName
        }
    }
</script>