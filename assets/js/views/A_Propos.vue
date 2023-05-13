<template>
    <h1 class="title">Qui sommes nous ?</h1>
    <div class="picture-container">
        <div class="picture-box">
            <img src="../../images/louis.png" alt="Image 1">
            <h2>Louis Giraudel</h2>
            <p>Développeur Front-End</p>
        </div>
        <div class="picture-box">
            <img src="../../images/ilyes.png" alt="Image 2">
            <h2>Ilyes Talaoubrid</h2>
            <p>Développeur Front-End</p>
        </div>
        <div class="picture-box">
            <img src="../../images/marie.png" alt="Image 3">
            <h2>Marie Vouriot</h2>
            <p>Développeuse Back-End</p>
        </div>
        <div class="picture-box">
            <img src="../../images/bastien.png" alt="Image 4">
            <h2>Bastien Lacour</h2>
            <p>Développeur Back-End</p>
        </div>
        <div class="picture-box">
            <img src="../../images/tom.png" alt="Image 5">
            <h2>Tom Chabas</h2>
            <p>Développeur Front-End</p>
        </div>
        <div class="picture-box">
            <img src="../../images/jeremy.png" alt="Image 6">
            <h2>Jeremy Ribes</h2>
            <p>Développeur Full-Stack</p>
        </div>
    </div>

    <div class="container">
        <h1>A Propos de DooVot</h1>
        <p>Bienvenue sur notre plateforme de vote, où l'opinion de chacun compte ! Nous sommes une bande de six développeurs web pleins d'énergie et d'humour, prêts à révolutionner la manière dont les décisions sont prises. Laissez-nous vous présenter notre équipe débordante d'idées et de talents : Louis, le magicien du code ; Ilyes, le jongleur des interfaces ; Marie, la reine de l'expérience utilisateur ; Bastien, le maître de la sécurité en ligne ; Tom, le génie de l'optimisation ; et Jérémy, le maestro des bases de données.</p>

        <p>Maintenant, parlons de notre bébé, notre petite création géniale : une plateforme de vote collaborative qui va changer la donne ! Imaginez un espace où vous pouvez rassembler vos amis, vos collègues ou même votre famille pour décider du meilleur projet parmi une sélection d'idées brillantes. Que ce soit pour votre projet scolaire, votre entreprise en herbe ou même pour choisir la destination de vos prochaines vacances entre potes, notre plateforme gratuite est là pour vous faciliter la vie.</p>

        <p>Créez simplement un espace dédié à votre projet, partagez-le avec vos proches et regardez les votes affluer ! Notre interface conviviale vous permettra de suivre en temps réel les résultats, tout en vous offrant une expérience utilisateur sans tracas. Nous avons pensé à tout pour que vous puissiez vous concentrer sur l'essentiel : obtenir les avis et les votes qui comptent.</p>

        <p>Chez nous, l'accent est mis sur la collaboration et le plaisir. Nous croyons fermement que chaque voix mérite d'être entendue, et nous sommes ravis de vous offrir une plateforme où vous pouvez exprimer votre opinion en toute liberté. Alors, qu'attendez-vous ? Rejoignez-nous dès maintenant et préparez-vous à prendre part à une aventure de vote hors du commun. Ensemble, nous allons faire des vagues et changer la façon dont les décisions sont prises. Prêt à faire partie de notre joyeuse équipe de votants ?</p>
    </div>
</template>

<script>
    export default {
        name: 'A_Propos',
        data() {
            return {
            
            }
        },
        methods: {
            
        }
    }
</script>

<style scoped>

h1 {
    color: rgb(9, 56, 143);
}

@media (min-aspect-ratio: 1) {
    .picture-container {
        position: absolute;
        width: 50%;
        display: flex;
        flex-wrap: wrap;
        align-content: flex-start;
        color: rgb(9, 56, 143);
        transform: translateY(5em);

    }

    .title {
        position: absolute;
        margin-top: 3vw;
        margin-left: 5vw;
        color: rgb(9, 56, 143);

    }
    
    .picture-box {
      width: 33.3%;
      min-width: 3vw;
      padding: 2vw;
      box-sizing: border-box;
      text-align: center;
      float: left;
    }
    
    .picture-box img {
      width: 10vw;
      height: 10vw;
      border-radius: 3vw;
    }
    
    .picture-box h2 {
        margin-top: 1vw;
        font-size: 1.1vw;
    }
    
    .picture-box p {
        margin-top: 0.6vw;
        font-size: 0.8vw;
    }
    
    .container {
        max-width: calc(50% - 5em);
        position: relative;   
        background-color: #c3e5f3;
        box-shadow: 20px 20px 10px rgba(9, 56, 143, 0.582);
        padding: 2vw;
        border-radius: 10px;
        transform: translate(22vw, 7em);
        margin-bottom: 20vw;
    }


}
@media (max-aspect-ratio: 1) {
    .picture-container {
        position: relative;
        width: 90%;
        display: flex;
        flex-wrap: wrap;
        align-content: flex-start;
        color: rgb(9, 56, 143);
        transform: translate(2vw, 5em);
    }

    .title {
        position: relative;
        margin-top: 10vw;
        margin-left: 5vw;
        color: rgb(9, 56, 143);

    }
    
    .picture-box {
      width: 33.3%;
      min-width: 3vw;
      padding: 1vw;
      box-sizing: border-box;
      text-align: center;
      float: left;
    }
    
    .picture-box img {
      width: 20vw;
      height: 20vw;
      border-radius: 6vw;
    }
    
    .picture-box h2 {
        margin-top: 2vw;
        font-size: 2.2vw;
    }
    
    .picture-box p {
        margin-top: 1.2vw;
        font-size: 1.6vw;
    }
    
    .container {
        max-width: 80%;
        position: relative;   
        background-color: #c3e5f3;
        box-shadow: 20px 20px 10px rgba(9, 56, 143, 0.582);
        padding: 2vw;
        border-radius: 10px;
        margin-top: 15vw;
        margin-bottom: 15vw;
        transform: translate(2vw, 1em);
    }



}




</style>

