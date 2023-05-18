<style scoped>
@import '../../styles/app.css'; 
@import '../../styles/compte.css'; 
</style>

<script>
    import Headermenu from '../components/Headermenu.vue';

    export default{
        name: 'Compte',
        el:'',
        data() {
            return {
            }
        },
        methods: {
        },
        components: {
            Headermenu
        }
    }
</script>

<template>
    <div class="boxCompte" style="margin-top: 7%; margin-left: 40%;">
        <p class="textCompte">Un compte ?</p>
        <RouterLink to="/connexion">
            <button id="btnCompte" v-on:click="" class="buttonCompte textCompte" style="font-size: 100%;">CONNEXION</button>
        </RouterLink>
    </div>
    <div class="boxCompte" style="margin-top: 22%; margin-left: 40%;">
        <p class="textCompte">Pas de compte ?</p>
        <RouterLink to="/inscription">
            <button id="btnCompte" v-on:click="" class="buttonCompte textCompte" style="font-size: 100%;">INSCRIPTION</button>
        </RouterLink>
    </div>
</template>