<style scoped>
    @import '../../styles/app.css';
    @import '../../styles/dashboard.css';
</style>

<script>
    import { VueElement } from 'vue';

    export default{
        name: 'Dashboard',
        data() {
            return {
                subjects: '',
                votes: '',
            }
        },
        created() {
            this.getHistory()
        },
        methods: {
            getHistory() {
                let userId = VueElement.prototype.$userId;

                fetch("/history/" + userId, {"method": "GET"})
                    .then(response => response.json())
                    .then(result => {
                        this.subjects = result.subjects;
                        this.votes = result.votes;
                    });
            },
        }
    }
</script>

<template>
    <div class="flex-column">
        <div class="d-flex flex-row flex-wrap justify-content-center">
            <div class="flex-column flex-wrap">
                <div class="history">
                    <span class="box-title">Historique de mes projets</span>
                    <div class="d-flex flex-row flex-wrap justify-content-center">
                        <div v-for="subject in this.subjects">
                            <div class="box-dashboard flex-column">{{ subject.name }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-column">
                <div class="history">
                    <span class="box-title">Historique de mes votes</span>
                    <div class="d-flex flex-row flex-wrap justify-content-center">
                        <div v-for="vote in this.votes">
                            <div class="box-dashboard">{{ vote.name }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-row d-flex justify-content-center">
            <img class="img-dashboard" src="../../../public/images/dashboard.svg">
        </div>
    </div>
</template>