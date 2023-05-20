<style scoped>
    @import '../../styles/app.css';
    @import '../../styles/vote.css';
</style>

<script>
    import { Pie } from 'vue-chartjs';
    import { Chart as ChartJS, ArcElement, Tooltip, Legend, Colors } from 'chart.js';
    ChartJS.register(ArcElement, Tooltip, Legend, Colors);
    
    import HeadermenuConnect from '../components/HeadermenuConnect.vue';

    import { VueElement } from 'vue';

    export default{
        name: 'Vote',
        components: { Pie, HeadermenuConnect },  
        data () {
            return {
                loaded: false,
                chartData: null,
                graphData: null,
                chartOptions: {
                    responsive: true,
                    plugins: {
                        colors: {
                            forceOverride: true
                        }
                    }
                },
                subject: '',
                projects: '',
                showVote: false,
                showResult: false,
                idSelectedProject: null,
                voteForm: '',
                alertMsg: '',
                showDismissibleAlert: false,
                option: '',
            }
        },
        async mounted () {
            this.loaded = false;

            try {
                await fetch("/graph/" + this.$route.params.id, {"method": "GET"})
                    .then(response => response.json())
                    .then(result => {
                        this.graphData = result;
                        this.subject = result.subject;
                        this.projects = result.projects;
                    });

                this.chartData = {
                    labels: this.graphData.labels,
                    datasets: [{
                        label: 'Résultat des votes',
                        data: this.graphData.data,
                        hoverOffset: 4
                    }]
                };

                this.loaded = true;
            } catch (e) {
                console.error(e)
            }
        },
        methods: {
            getImgPath(numberImg) {
                return require(`../../../public/images/subject-${numberImg}.svg`);
            },
            vote() {
                this.showVote = !this.showVote;
                this.showResult = false;
            },
            result() {
                this.showResult = !this.showResult;
                this.showVote = false;
            },
            changeSelectedProject(id) {
                this.idSelectedProject = id;
            },
            submitForm() {
                let userId = VueElement.prototype.userId;
                userId = 1;
                fetch("/new-vote/" + this.idSelectedProject + "&"+ userId, {"method": "GET"})
                    .then(response => response.json())
                    .then(result => {
                        this.alertMsg = result;
                        this.delayedAlert();
                    });
                this.goBack();
            },
            goBack() {
                this.showVote = false;
                this.showResult = false;
            },
            delayedAlert() {
                this.showDismissibleAlert = true;
                setTimeout(() => {
                    this.showDismissibleAlert = false;
                }, 2000);
            },
            addOption() {
                let userId = VueElement.prototype.userId;
                userId = 1;
                if (this.option != '') {
                    fetch("/add-project/" + this.$route.params.id + "&"+ userId + "&" + this.option, {"method": "GET"})
                    .then(response => response.json())
                    .then(result => {
                        this.alertMsg = result;
                        this.delayedAlert();
                        this.getGraph();
                        this.option = '';
                    });
                }
            },
            getGraph() {
                fetch("/graph/" + this.$route.params.id, {"method": "GET"})
                    .then(response => response.json())
                    .then(result => {
                        this.graphData = result;
                        this.subject = result.subject;
                        this.projects = result.projects;
                    });

                this.chartData = {
                    labels: this.graphData.labels,
                    datasets: [{
                        label: 'Résultat des votes',
                        data: this.graphData.data,
                        hoverOffset: 4
                    }]
                };
            }
        }
    }
</script>

<template>
    <HeadermenuConnect />
    <div class="flex-column content">
        <div v-if="showDismissibleAlert" class="alert alert-success" id="success-alert">{{ this.alertMsg }}</div>
        <div class="d-flex flex-row">
            <span class="title">Projet : {{ this.subject.name }}</span>
        </div>
        <div class="d-flex flex-row" v-if="loaded === true && chartData != null">
            <!-- show vote -->
            <div v-if="showVote && !showResult" class="box-vote flex-column">
                <div v-for="project in this.projects" class="d-flex flex-row">
                    <input class="circle" type="radio" v-model="voteForm" :id="project.id" :value="project.id" @change="this.changeSelectedProject($event.target.value)">
                    <span class="option">{{ project.description }} </span>
                </div>
                <div class="d-flex flex-row">
                    <button class="btn align-self-center" v-on:click="this.submitForm()">VOTER</button>
                    <button class="btn align-self-center" v-on:click="this.goBack()">RETOUR</button>
                </div>
                <div class="d-flex flex-row">
                    <input class="inputOption" v-model="option" type="text">
                    <button class="btn-option align-self-center m-8" v-on:click="this.addOption()">Ajouter une option</button>
                </div>
            </div>
            <!-- show result -->
            <div v-if="showResult && !showVote" class="box-vote flex-column">
                <Pie id="chart-votes" :data="chartData" :options="chartOptions" />
                <button class="btn align-self-center" v-on:click="this.goBack()">RETOUR</button>
            </div>
            <div v-if="(!showResult && !showVote) || (showResult && showVote)" class="box-vote flex-column">
                <img class="img-vote" :src="getImgPath(this.subject.id % 3)">
                <span class="subject-title-vote d-flex justify-content-center">{{ this.subject.name }}</span>
            </div>
            <div class="rigth-side d-flex flex-column">
                <div class="description d-flex flex-row">
                    <div class="w-100 d-flex flex-column">
                        <span class="subject-title-vote d-flex flex-row">{{ this.subject.name }}</span>
                        <span class="subject-description d-flex flex-row">Ajouter une description dans la bdd au subject ?</span>
                    </div>
                </div>
                <div class="graph d-flex flex-row">
                    <!-- show graph in small -->
                    <div v-if="!showResult && !showVote" class="d-flex flex-column">
                        <Pie class="chart-votes" :data="chartData" :options="chartOptions" />
                    </div>
                    <!-- show picture of voting -->
                    <div v-if="showResult || showVote" class="d-flex flex-column">
                        <img class="chart-votes" src="../../../public/images/show-vote.svg">
                    </div>
                    <!-- show button -->
                    <div v-if="(!showResult && !showVote) || (showResult && showVote)" class="d-flex flex-column all-btn">
                        <button class="btn align-self-center" v-on:click="this.vote()">Voter</button>
                        <button class="btn align-self-center" v-on:click="this.result()">Résultats</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>