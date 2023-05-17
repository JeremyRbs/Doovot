<style scoped>
@import '../../styles/app.css';
@import '../../styles/services.css';
</style>
<script>
    import Headermenu from '../components/Headermenu.vue';

    export default{
        name: 'Services',
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
    <img id="imageServices" src="../../images/logoServices.svg"/>
    <p class="textServices" style="font-size: 34px; margin-top: 2%; margin-left: 18%; position: absolute;">La plateforme de <br/> proposition de projet <br/> et de vote en ligne</p>
    <div class="boxServices" style="margin-top: 3%; margin-left: 55%;">
        <p class="textServices">Possibilité de <br/> voter</p>
    </div>
    <div class="boxServices" style="margin-top: 16%; margin-left: 18%;">
        <p class="textServices">Proposition de <br/> projet</p>
    </div>
    <div class="boxServices" style="margin-top: 28%; margin-left: 58%;">
        <p class="textServices">Visualiser les <br/> résultats</p>
    </div>
</template>