Proyecto Sistemas de Información Geografica del Atlas Linguistico Etnografico de Colombia
SIG ALEC

Preparación

    Instalar composer

    https://styde.net/instalacion-de-composer-y-laravel-en-windows/

    La base de datos debe tener las siguientes caracteristicas:

    Nombre Base de datos =Tesis
    Usuario por defecto postgres =postgres
    contraseña de postgres =j123

Instalación

    Después de descargar el proyecto entramos a este.

    $ cd nombreRepositorio

    Ejecutamos el siguiente comando.

    $ composer install

    Modificamos el nombre del archivo .env.example. por .env y agregamos nuestras credenciales.

    Ejecutamos las migraciones.

    $ php artisan migrate

    Por ultimo solo debemos generar una key para nuestra app.

     $ php artisan key:generate

Ejecución

    Listo ya podemos ejecutar el proyecto SIG ALEC.

    $ php artisan serve