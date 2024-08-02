setup:
	@make build
	@make up
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec exam-ui-app bash -c "composer update"
data:
	docker exec exam-ui-app bash -c "php artisan migrate:fresh --seed"

permission1:
	docker exec exam-ui-app bash -c "chown -R www-data:www-data /var/www/html/storage"

permission2:
	docker exec exam-ui-app bash -c "chmod -R 775 /var/www/html/storage"

git-pull:
	docker exec exam-ui-app bash -c "git pull"
