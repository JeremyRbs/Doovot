<template>
    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid align-items-center nav">
                <a class="navbar-brand logoimg" href="#">
                    <img src="../../images/doovot.png" alt="Logo" width="353" height="81">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav align-items-center">
                        <a class="nav-link text" aria-current="page" href="#">Accueil</a>
                        <a class="nav-link text" href="#">Services</a>
                        <a class="nav-link text" href="#">propos</a>
                        <a class="nav-link text">Contact</a>
                        <a class="nav-link me-5" href="#">
                            <img src="../../images/logopersonneblanc.png" alt="Logoperson" height="80" width="80">
                        </a>                       
                    </div>
                </div>
            </div>
        </nav>        
    </div>
</template>

<script>
    export default {
        name: 'Headermenu',
        data() {
            return {

            }
        },
        methods: {
            refreshHello() {
                
            }
        }
    }
</script>

<style scoped>
    .logoimg{
        padding-top: 20px;
        padding-left: 30px;
    }
    .text{
        font-family: 'Lucida Sans';
        font-style: normal;
        font-weight: bolder;
        font-size: 21px;
        line-height: 44px;
        text-align: center;
        color: #FFFFFF;
        margin-top: 20px;
        margin-right: 1.5em;
    }

</style>