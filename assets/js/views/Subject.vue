<style scoped>
    @import '../../styles/app.css';
    @import '../../styles/subject.css';
</style>

<script>
    export default{
        name: 'Subject',
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
    <div class="flex-column">
        <div class="flex-row">
            <span class="title">Les projets</span>
        </div>
        <div class="all-subjects d-flex flex-row flex-wrap justify-content-center">
            <div class="subject flex-column" v-for="subject in this.subjects">
                <img class="img" :src="getImgPath(subject.id % 3)">
                <span class="subject-title">{{ subject.name }}</span>
            </div>
        </div>
    </div>
</template>