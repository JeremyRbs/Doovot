<style scoped>
@import '../../styles/app.css'; 
@import '../../styles/connexion.css'; 
</style>
<script>
    import Headermenu from '../components/Headermenu.vue';

    import { VueElement } from 'vue'
    export default{
        name: 'Connexion',
        el:'#btnConnect',
        data() {
            return {
                login: '',
                mdp: '',
                message: ''
            }
        },
        methods: {
            connexionUser(){
                if(this.login == ''|| this.mdp == ''){
                    alert("Veuillez mettre un nom d'utilisateur ainsi qu'un mot de passe");
                }
                else{
                    fetch("/connexionUser/" + this.login + "&"+ this.mdp, {"method": "GET"})
                    .then(response => response.json())
                        .then(result => {
                            this.message = result;
                            if(!this.message.id)
                                alert(this.message);
                            else{
                                VueElement.prototype.$userId = this.message.id;
                                VueElement.prototype.$userName = this.message.name;
                                VueElement.prototype.$userIsAdmin = this.message.isAdmin;
                                // a finir avec les routes
                            }
                        });
                }
            } 
        },
        components: {
            Headermenu
        }
    }
</script>

<template>
    <Headermenu/>
    <div style="flex">
      <img id="imageConnexion" src="../../images/bonhommeConnexion.svg"/>  
    </div>
    <div>
        <div class="boxConnexion" style="position: absolute; width: 20%; height: 10%; margin-top: 7%;  margin-left: 60%;">
            <p class="textConnexion" style="position: absolute; top: 18%; left: 12%;">Utilisateur</p>
            <input class="inputConnexion" v-model="login" type="text" id="btnLogin" style="position: absolute; top: 58%; left: 12%;">
        </div>
        <div class="boxConnexion" style="position: absolute; width: 20%; height: 10%; margin-top: 14%;  margin-left: 60%;">
            <p class="textConnexion" style="position: absolute; top: 18%; left: 12%;">Mot de passe</p>
            <input class="inputConnexion" v-model="mdp" type="password" id="btnMdp" style="position: absolute ;top: 56%; left: 12%;">
        </div>
        <button id="btnConnect" v-on:click="connexionUser()" class="btnConnexion textConnexion" style="absolute; width: 15%; height: 5%; margin-top: 25%; margin-left:63%;">Se connecter</button>
    </div>
</template>