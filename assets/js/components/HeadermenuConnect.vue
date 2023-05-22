<template>
    <div>
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid mt-2 ms-4">
                <router-link class="navbar-brand" to="/">
                    <img src="../../images/doovot.png" alt="Logo" width="353" height="81">
                </router-link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <router-link class="nav-link fs-4 me-5 fw-bolder" to="/dashboard">Tableau de bord</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link text-nowrap fs-4 me-5 fw-bolder" to="/subject">Projets</router-link>
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
        name: 'HeadermenuConnect',
        data() {
            return {

            }
        },
        methods: {
        }
    }
</script>

<style scoped>
    li a{
        color:white;
    }
    li a:hover{
        color:#3c7ba0;
    }
</style>