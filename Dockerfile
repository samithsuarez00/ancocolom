# Usa PHP 8.2 CLI
FROM php:8.2-cli

# Carpeta de trabajo
WORKDIR /var/www/html

# Copiar todos los archivos al contenedor
COPY . .

# Exponer el puerto que Render usa
EXPOSE 10000

# Comando para arrancar el servidor PHP
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
