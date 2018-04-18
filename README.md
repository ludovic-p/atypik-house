```
  /$$$$$$    /$$                         /$$ /$$       /$$   /$$                                        
 /$$__  $$  | $$                        |__/| $$      | $$  | $$                                        
| $$  \ $$ /$$$$$$   /$$   /$$  /$$$$$$  /$$| $$   /$$| $$  | $$  /$$$$$$  /$$   /$$  /$$$$$$$  /$$$$$$ 
| $$$$$$$$|_  $$_/  | $$  | $$ /$$__  $$| $$| $$  /$$/| $$$$$$$$ /$$__  $$| $$  | $$ /$$_____/ /$$__  $$
| $$__  $$  | $$    | $$  | $$| $$  \ $$| $$| $$$$$$/ | $$__  $$| $$  \ $$| $$  | $$|  $$$$$$ | $$$$$$$$
| $$  | $$  | $$ /$$| $$  | $$| $$  | $$| $$| $$_  $$ | $$  | $$| $$  | $$| $$  | $$ \____  $$| $$_____/
| $$  | $$  |  $$$$/|  $$$$$$$| $$$$$$$/| $$| $$ \  $$| $$  | $$|  $$$$$$/|  $$$$$$/ /$$$$$$$/|  $$$$$$$
|__/  |__/   \___/   \____  $$| $$____/ |__/|__/  \__/|__/  |__/ \______/  \______/ |_______/  \_______/
                     /$$  | $$| $$                                                                      
                    |  $$$$$$/| $$                                                                      
                     \______/ |__/                                                                      
```

#Bienvenue sur AtypikHouse

##Convention

##Environement serveur

#####Déployer l'environnement Docker :
``` 
docker-compose up -d 
```
#####Voir l'état des containers : 
``` 
docker ps -a
```
#####Eteindre ses machines :
```
docker-compose down
```
#####Entrer dans un container en bash :
```
docker exec -it [CONTAINER_NAME] bash
```
#####Voir les logs d'un container et suivre son état en temps réel :
```
docker-compose logs -f [SERVICE_NAME]
```
#####Install : 
```
docker exec -it service_php composer install
```
#####Clear cache : 
```
docker exec -it service_php bash -c ../cacheClear.sh
```