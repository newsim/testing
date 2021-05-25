# testing


- docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:7.4-cli php <nom fichier>



# lancer test 

- docker run -v$(pwd):/app --rm phpunit/phpunit test