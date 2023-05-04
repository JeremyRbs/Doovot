# Projet vote

Version : 
  PHP : 8+
  Symfony : 6+

Pour mettre à jour le projet lancer les commandes : 
  - `composer install`
  - `yarn install`
  - `yarn build`

Pour lancer le projet : 
  - `symfony server:start` pour le coté back
  - `yarn run encore dev --watch` pour le coté front

Installation bootstrap : `yarn add vue bootstrap bootstrap-vue`

Pour créer la base de données : 
  - lancer Wamp
  - exécuter la commande : `php bin/console doctrine:database:create` qui permet de créer la base de données en local
  
Pour mettre à jour la base de données : `php bin/console doctrine:migrations:migrate` (permet d'exécuter toutes les migrations qui n'ont pas encore été jouées sur ta base de données en local)
