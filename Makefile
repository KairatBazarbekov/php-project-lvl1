install:
	composer install

brain-games:
    .bin/brain-games
    .bin/brain-even
    .bin/brain-calc

validate:
    composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin