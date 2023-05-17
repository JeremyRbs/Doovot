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
    <Headermenu/>
    <div class="boxCompte" style="margin-top: 14%; margin-left: 40%;">
        <p class="textCompte">Un compte ?</p>
        <router-link id="btnCompte" class="buttonCompte textCompte" style="font-size: 100%;" to="/connexion">CONNEXION</router-link>
    </div>
    <div class="boxCompte" style="margin-top: 27%; margin-left: 40%;">
        <p class="textCompte">Pas de compte ?</p>
        <router-link id="btnCompte" class="buttonCompte textCompte" style="font-size: 100%;" to="/inscription">INSCRIPTION</router-link>
    </div>
</template>