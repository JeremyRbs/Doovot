<template>
    <div class="input-group mb-3 input">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        <input type="text" v-model="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <button type="button" class="btn btn-secondary btn-lg" @click="refreshHello">Demander un bonjour !</button>
    <div class="alert alert-primary" role="alert" v-show="!!hello">{{ hello }}</div>
</template>

<script>
    export default {
        name: 'HelloName',
        data() {
            return {
                name: '',
                hello: ''
            }
        },
        methods: {
            refreshHello() {
                if (this.name) {
                    fetch("/api/" + this.name, {"method": "GET"})
                    .then(response => response.json())
                    .then(result => this.hello = result);
                }
            }
        }
    }
</script>

<style scoped>
    .btn{
        margin: 20px auto;
    }
    .input{
        width: 50%;
    }
</style>