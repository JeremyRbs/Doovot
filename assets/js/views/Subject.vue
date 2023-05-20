<style scoped>
    @import '../../styles/app.css';
    @import '../../styles/subject.css';
</style>

<script>
    import HeadermenuConnect from '../components/HeadermenuConnect.vue';

    export default{
        name: 'Subject',
        components: {
            HeadermenuConnect
        },
        data() {
            return {
                subjects: '',
            }
        },
        created() {
            this.getAllSubjects()
        },
        methods: {
            getAllSubjects() {
                fetch("/all-subjects", {"method": "GET"})
                    .then(response => response.json())
                    .then(result => {
                        this.subjects = result;
                    });
            },
            getImgPath(numberImg) {
                return require(`../../../public/images/subject-${numberImg}.svg`);
            }
        }
    }
</script>

<template>
    <HeadermenuConnect />
    <div class="flex-column">
        <div class="flex-row">
            <span class="head-title d-flex justify-content-center">Les projets</span>
        </div>
        <div class="all-subjects d-flex flex-row flex-wrap justify-content-center">
            <div class="subject flex-column" v-for="subject in this.subjects">
                <router-link :to="{ path: '/vote/' + subject.id }">
                    <img class="img" :src="getImgPath(subject.id % 3)">
                    <span class="subject-title">{{ subject.name }}</span>
                </router-link>
            </div>
        </div>
    </div>
</template>