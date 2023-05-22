<template>
    <Headermenu/>
    <div class="logo-container">
        <img src="../../images/vote_contact.png" alt="Contacter Doovot">
    </div>

    <div class="social-icons-container">
        <a href="https://pnrtscr.com/kqrkc7">
            <img src="../../images/instagram.png" alt="Instagram Icon" class="icon">
        </a>

        <a href="https://twitter.com/DooVote">
            <img src="../../images/twitter_icon.png" alt="Twitter Icon" class="icon">
        </a>

        <a href="https://www.telegram.org">
            <img src="../../images/telegram.png" alt="Telegram Icon" class="icon">
        </a>
    </div>

    <div class="container">
        <form id="contact">
            <h2 class="title">Envoyer un message</h2>    
            <div class="form-group">
                <label for="exampleFormControlInput1">Adresse email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Motif</label>
                <select class="form-control" id="exampleFormControlSelect1">
                <option>Compte</option>
                <option>Bug</option>
                <option>Historique</option>
                <option>Collaboration</option>
                <option>Autre</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" v-on:click="_confirm()" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</template>

<script>
    import Headermenu from '../components/Headermenu.vue';

    export default {
        name: 'Contact',
        data() {
            return {
            
            }
        },
        methods: {
            _confirm(){
                alert('Votre commentaire a bien été pris en compte. Nos équipes reviendront vers vous au plus vite.');
            } 
        },
        components: {
            Headermenu
        }
    }
</script>

<style scoped>




.container {
    margin-top: 3%;
    background-color: #c3e5f3;
    border-radius: 10px;
    position: relative;
    margin-right: 20px;
    padding: 20px;
    box-shadow: 20px 20px 10px rgba(9, 56, 143, 0.582);
}



@media (max-aspect-ratio: 9/16) {
    
    .logo-container {
        margin-top: 4em;
        position: relative;
        margin: 5vw;
    }

    .social-icons-container {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        margin: 10vw;
    }

    .social-icons-container img {
        width: 20vw;
        margin: 2vw;
        margin-bottom: 20px;
        transition: box-shadow 0.3s ease-in-out;
    }

    .social-icons-container img.icon:hover {
            box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5);
            border-radius: 50%;
    }
    .container {
        position: relative;
        width: auto;
        margin: 5vw;
    }
}

@media (min-aspect-ratio: 9/16) {

    .logo-container {
        position: fixed;
        top: 50%;
        left: 20px;
        transform: translateY(-50%);
    }

    .logo-container img {
        width: 25vw;
        height: 25vw;
        margin-left: 35%;
    }

    .social-icons-container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
    
    }

    .social-icons-container img {
        width: 50px;
        margin-bottom: 50px;
        transition: box-shadow 0.3s ease-in-out;
    }

    .social-icons-container img.icon:hover {
            box-shadow: 0 0 10px 5px rgba(255, 255, 255, 0.5);
            border-radius: 50%;
    }
    .container {
        position: fixed;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        width: calc(50% - 5em);
        height: auto;
    }
}

.btn {
    display: block;
    margin: 20px auto 0;
}

.title {
    padding: 1em;
}

.social-media {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 50%;
    left: 0;
    transform: translateX(-50%);
}

.social-media img {
    margin: 10em;
    width: 50em;
}

</style>

