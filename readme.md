# Docker sample
This sample shows how to use docker compose and run 
several self made or existing container and link them together.

## Setup
Call the "build.sh" file in docker/images to build the 
needed containers. To get connected to your containers
modify your hosts file:
```
127.0.0.1       docker-web.local docker-mariadb.local docker-php.local
```

## Run
Run this command in the root directory of this project 
to start:
```
docker-compose up
```

## Open browser
You are able to see the index.php by opening this url 
in your browser:
```
http://docker-web.local:8000/
```