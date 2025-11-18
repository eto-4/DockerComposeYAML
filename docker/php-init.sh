#!/bin/bash
set -e

# Verificar si mysqli ja està instal·lat
if ! php -m | grep -q mysqli; then
    echo "Instalan mysqli..."
    docker-php-ext-install mysqli
    a2enmod rewrite
else
    echo "mysqli ya está instalat"
fi

echo "Iniciant Apache..."
exec apache2-foreground