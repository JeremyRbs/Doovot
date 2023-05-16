<template>
    <div>
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid mt-2 ms-4">
                <router-link class="navbar-brand" to="/home">
                    <img src="../../images/doovot.png" alt="Logo" width="353" height="81">
                </router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <router-link class="nav-link text-nowrap fs-3 me-5 fw-bolder" to="/">Accueil</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link text-nowrap fs-3 me-5 fw-bolder" to="/services">Services</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link text-nowrap fs-3 me-5 fw-bolder" to="/a-propos">A propos</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link text-nowrap fs-3 me-5 fw-bolder" to="/contact">Contact</router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-nowrap mb-4 me-4" href="#">
                                <img src="../../images/logopersonneblanc.png" alt="Logoperson" height="80" width="80">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <router-view />
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
    li a{
        color:white;
        font-family: 'Montserrat';
    }
    li a:hover{
        color:#3c7ba0;
    }
</style>