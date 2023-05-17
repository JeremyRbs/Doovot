<template>
    <div class="containermain">
        <div class="textleft">
            <h1>La plateforme de vote la plus en vogue de l'EFREI</h1>
        </div>
        <div class="imageright">
            <img src="../../images/imageAccueil.png" class="img-fluid" width="680" height="364"/>
        </div>
    </div>
</template>

<script>

    export default {
        name: 'Home'
    }
</script>
    
<style scoped>
    .containermain{
        display: flex;
        flex-direction: row;
        margin: 5% 10% 0 10%;
        align-items: center;
        justify-content: space-around;
    }

    .textleft{
        display: flex;
        flex-shrink: 1;
        flex-basis: 50%;
        color: #3c7ba0;
        justify-content: center;
        text-align: center;
    }
    .textleft h1{
        display: flex;
        width: 80%;
        justify-content: center;
        font-style: normal;
        font-weight: 600;
        font-size: 44px;
        line-height: 59px;
        text-align: center;
    }
</style>