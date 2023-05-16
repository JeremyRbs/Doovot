<style scoped>
@import '../../styles/app.css'; 
@import '../../styles/compte.css'; 
</style>
<script>
    export default{
        name: 'Compte',
        el:'',
        data() {
            return {
            }
        },
        methods: {
        }
    }
</script>

<template>
    <div class="boxCompte" style="margin-top: 14%; margin-left: 40%;">
        <p class="textCompte">Un compte ?</p>
        <button id="btnCompte" v-on:click="" class="buttonCompte textCompte" style="font-size: 100%;">CONNEXION</button>
    </div>
    <div class="boxCompte" style="margin-top: 27%; margin-left: 40%;">
        <p class="textCompte">Pas de compte ?</p>
        <button id="btnCompte" v-on:click="" class="buttonCompte textCompte" style="font-size: 100%;">INSCRIPTION</button>
    </div>
</template>