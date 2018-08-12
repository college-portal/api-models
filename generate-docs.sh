#!/bin/sh

if [ ! -f ./vendor/bin/phpDocumentor.phar ]
then
    curl https://www.phpdoc.org/phpDocumentor.phar --output ./vendor/bin/phpDocumentor.phar
fi

php ./vendor/bin/phpDocumentor.phar -d ./src/ -t generated-docs  --template=xml

if [ ! -d ./docs ]
then
    mkdir ./docs
fi

./vendor/bin/phpdocmd generated-docs/structure.xml ./docs --index README.md