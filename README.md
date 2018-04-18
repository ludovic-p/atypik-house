# atypik-house

Déployer l'environnement Docker :

* <code> docker-compose up -d </code>

Voir l'état des containers : 

* <code> docker ps -a </code>

Eteindre ses machines :

* <code> docker-compose down </code>

Entrer dans un container en bash :

* <code> docker exec -it [CONTAINER_NAME] bash </code>

Voir les logs d'un container et suivre son état en temps réel :

* <code> docker-compose logs -f [SERVICE_NAME] </code>

Install : 
* <code> docker exec -it service_php composer install </code>

Clear cache : 
* <code> docker exec -it service_php bash -c ../cacheClear.sh </code>
