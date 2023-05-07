<style scoped>
@import '../../styles/app.css'; 
@import '../../styles/connexion.css'; 
</style>
<script>
    export default{
        name: 'Connexion',
        el:'#btnConnect',
        data() {
            return {
            }
        },
        methods: {
            greet(){
                alert('Cest carre');
            } 
        }
    }
</script>

<template>
    <div style="flex">
      <img id="imageConnexion" src="../../images/bonhommeInscription.png"/>  
    </div>
    <div>
        <div class="boxConnexion" style="position: absolute; width: 20%; height: 10%; margin-top: 16%;  margin-left: 60%;">
            <p class="textConnexion" style="position: absolute; top: 18%; left: 12%;">Utilisateur</p>
            <input class="inputConnexion" type="text" id="btnLogin" style="position: absolute; top: 58%; left: 12%;">
        </div>
        <div class="boxConnexion" style="position: absolute; width: 20%; height: 10%; margin-top: 23%;  margin-left: 60%;">
            <p class="textConnexion" style="position: absolute; top: 18%; left: 12%;">Mot de passe</p>
            <input class="inputConnexion" type="text" id="btnMdp" style="position: absolute ;top: 56%; left: 12%;">
        </div>
        <button id="btnConnect" v-on:click="greet()" class="btnConnexion textConnexion" style="absolute; width: 15%; height: 5%; margin-top: 32%; margin-left:63%;">S'inscrire</button>
    </div>
</template>