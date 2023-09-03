build-docker:
	docker compose -f ./backend/docker-compose.yml up -d

stop-docker:
	docker compose -f ./backend/docker-compose.yml stop

down-docker:
	docker compose -f ./backend/docker-compose.yml down

build-vue:
	docker stop frontend && \
	docker stop webserver && \
    docker rm frontend && \
	docker rm webserver && \
	docker rmi backend-frontend && \
	docker compose -f ./backend/docker-compose.yml up -d 

restart-server:
	docker stop webserver && \
	docker rm webserver

nginx-cmd:
	docker exec -it webserver bash 

laravel-cmd:
	docker exec -it backend bash

vue-cmd:
	docker exec -it frontend bash

db-cmd:
	docker exec -it db bash
