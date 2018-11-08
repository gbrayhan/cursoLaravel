# Consideraciones Sobre la Aplicacion de Laravel  

## Requerimientos del sistema  

El aplicativo debe funcionar con una version de **PHP 7.1**  
### Las librerias con las que debe contar son las siguientes  
php7.1-curl, php7.1-xml, php7.1-mysql, php7.1-json, php7.1-mbstring, php7.1-zip, php7.1-fpm  

El comando para instalar los paquetes de **PHP** es el siguiente:  
`sudo apt install php7.1 php7.1-curl php7.1-xml php7.1-mysql php7.1-json php7.1-mbstring php7.1-zip `  

Igualmente debemos tener instalado **Composer**  
`sudo apt install composer`  

Luego de que tenemos lo necesario instalamos las dependencias de nuestro proyecto de **Laravel**  
`composer install `  

## Seguridad  
### Archivo .env  
Existe un archivo .env.example que debe ser copiado a un archivo con nombre .env y ahi especificar  
las conexiones con la base de datos, y en este caso, agregar las llaves de nuestro autentificador de facebook.  

Es necesario que la base de datos de llame **cursolaravel**

### Llave de la aplicacion  
Para instalar la llave de la aplicacion de laravel ejecutamos el siguiente comando:  
`php artisan key:generate`  







