<style scoped>
    @import '../../styles/app.css';
    @import '../../styles/profil.css';
</style>

<script>
    import { VueElement } from 'vue';
    import HeadermenuConnect from '../components/HeadermenuConnect.vue';


    export default{
        name: 'Profil',
        components: {
            HeadermenuConnect
        },
        data () {
            return {
                username: VueElement.prototype.$userName
            }
        },

        methods: {
            
        }
    }
</script>

<template>   
    <HeadermenuConnect />
    <div class="box_principal">

        <div class ="box_contenu">

            <div class ="box_contenu_gauche">

                <div class="boxProfil box_informations" >

                    <div>
                        <h1 style="color = #498CB2" class="textProfilTitre1">Informations</h1>
                    </div>
                    
                    <div class="box_texte">
                        <p class="textProfil">Nom : {{ this.username }}</p>
                    </div>
                   
                </div>
                
                <div class="image1">
                    <img  id="imageProfil" src="../../images/design1_profil.svg"/>
                </div>

            </div>

            <div class ="box_contenu_droite">

                <div class="boxProfil box_informations">

                    <div>
                        <h1 style="color = #498CB2" class="textProfilTitre1">Sécurité</h1>
                    </div>

                    <div class="box_texte">
                        <p class="textProfil">Mot de passe : ************</p>
                    </div>
     
                </div>
                
                <div class ="image2">
                    <img  id="imageProfil" src="../../images/design2_profil.svg"/>
                </div>
               
            </div>

        </div>
        <!-- <div class="bouton">
            <button id="btnConnect" v-on:click="modifierUser()" class="btnConnexion textConnexion" style="width: 15%; height: 5%;">MODIFIER</button>
            <button id="btnConnect" v-on:click="retour()" class="btnConnexion textConnexion" style="width: 15%; height: 5%;">RETOUR</button>
        </div> -->

    </div> 



</template>