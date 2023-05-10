<style scoped>
    @import '../../styles/app.css';
    @import '../../styles/vote.css';
</style>

<script>
    import { Pie } from 'vue-chartjs';
    import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'
    ChartJS.register(ArcElement, Tooltip, Legend)
    import { defineComponent, onMounted, ref } from "vue";

    export default{
        name: 'Vote',
        components: { Pie },
        setup () {
            const doughnutRef = ref([]);
            let testData = ref(null);

            onMounted(() => {
                doughnutRef.value = [1, 2, 2]

                testData.value = {
                    labels: ["Distanciel", "Présentiel", "Hybride"],
                    datasets: [
                        {
                            data: doughnutRef.value,
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)'
                            ],
                        },
                    ],
                };
            });

            return { testData, doughnutRef };
        },
        
        // created() {
        //     this.getGraph();
        // },
        // data: () => ({
        //     chartData: {
        //         labels: [],
        //         datasets: [{
        //             label: 'My First Dataset',
        //             data: [],
        //             backgroundColor: [
        //                 'rgb(255, 99, 132)',
        //                 'rgb(54, 162, 235)',
        //                 'rgb(255, 205, 86)'
        //             ],
        //             hoverOffset: 4
        //         }]
        //     },
        //     chartOptions: {
        //         responsive: true
        //     },
        //     projectName: 'Cours',
        //     loaded: false,
        //     chartData: null,
        // }),
        // async mounted () {
        //     this.loaded = false

        //     try {
        //         console.log("async");
        //         await fetch("/graph/" + 1, {"method": "GET"})
        //             .then(response => response.json())
        //             .then(result => {
        //                 console.log(result);
        //                 this.graphData = result;
        //             });
                
        //         this.chartdata = {
        //             labels: this.graphData.labels,
        //             datasets: [{
        //                 label: 'Résultat des votes',
        //                 data: this.graphData.data,
        //                 backgroundColor: [
        //                     'rgb(255, 99, 132)',
        //                     'rgb(54, 162, 235)',
        //                     'rgb(255, 205, 86)'
        //                 ],
        //                 hoverOffset: 4
        //             }]
        //         };
        //         console.log(this.chartdata);

        //         this.loaded = true
        //     } catch (e) {
        //         console.error(e)
        //     }
        // },
        // methods: {
        //     getGraph() {
        //         fetch("/graph/" + 1, {"method": "GET"})
        //             .then(response => response.json())
        //             .then(result => {
        //                 console.log(result);
        //                 console.log(this.chartData);
        //                 // this.graphData = result;
        //                 // this.chartData.labels = result.labels;
        //                 // this.chartData.datasets[0].data = result.data;
        //                 // console.log(this.chartData);
        //             });
        //         this.loaded = true;
        //     },
        // }
    }
</script>

<template>
    <div class="flex-column">
        <span>Projet : Cours</span>
        <!-- <span>Projet : {{ this.projectName }}</span> -->
    </div>
    <div class="graph">
        <!-- <Pie 
            v-if="chartData != undefined || chartData != null"
            id="chart-votes"
            :options="chartOptions"
            :data="chartData"
        /> -->
        <Pie v-if="testData != undefined" :data="testData" ref="doughnutRef" />
    </div>
</template>