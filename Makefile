install:
	composer install

brain-games:
    .bin/brain-games
    .bin/brain-even
    .bin/brain-calc
    .bin/brain-gcd

validate:
    composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin