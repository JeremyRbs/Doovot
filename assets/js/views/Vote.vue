<style scoped>
    @import '../../styles/app.css';
    @import '../../styles/vote.css';
</style>

<script>
    import { Pie } from 'vue-chartjs';
    import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'
    ChartJS.register(ArcElement, Tooltip, Legend);

    export default{
        name: 'Vote',
        components: { Pie },
        data () {
            return {
                loaded: false,
                chartData: null,
                graphData: null,
                chartOptions: {
                    responsive: true
                },
                subject: '',
                showVote: false,
                showResult: false,
            }
        },
        async mounted () {
            this.loaded = false;

            try {
                await fetch("/graph/" + 1, {"method": "GET"})
                    .then(response => response.json())
                    .then(result => {
                        this.graphData = result;
                        this.subject = result.subject;
                    });

                this.chartData = {
                    labels: this.graphData.labels,
                    datasets: [{
                        label: 'Résultat des votes',
                        data: this.graphData.data,
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(54, 162, 235)',
                            'rgb(255, 205, 86)'
                        ],
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
            },
            result() {
                this.showResult = !this.showResult;
            }
        }
    }
</script>

<template>
    <div class="flex-column content">
        <div class="d-flex flex-row">
            <span class="title">Projet : {{ this.subject.name }}</span>
        </div>
        <div class="d-flex flex-row" v-if="loaded === true && chartData != null">
            <div v-if="showResult" class="box flex-column">
                <Pie id="chart-votes" :data="chartData" :options="chartOptions" />
            </div>
            <div v-if="!showResult" class="box flex-column">
                <img class="img" :src="getImgPath(this.subject.id % 3)">
                <span class="subject-title">{{ this.subject.name }}</span>
            </div>
            <div class="rigth-side d-flex flex-column">
                <div class="description d-flex flex-row">
                    <div class="w-100 d-flex flex-column">
                        <span class="subject-title d-flex flex-row">{{ this.subject.name }}</span>
                        <span class="subject-description d-flex flex-row">{{ this.subject.name }}</span>
                    </div>
                </div>
                <div class="graph d-flex flex-row">
                    <div v-if="!showResult && !showVote" class="d-flex flex-column">
                        <Pie class="chart-votes" :data="chartData" :options="chartOptions" />
                    </div>
                    <div v-if="showResult || showVote" class="d-flex flex-column">
                        <img class="chart-votes" src="../../../public/images/show-vote.svg">
                    </div>
                    <div class="d-flex flex-column all-btn">
                        <button class="btn align-self-center" v-on:click="this.vote()">Voter</button>
                        <button class="btn align-self-center" v-on:click="this.result()">Résultats</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>