# Como ejecutar el proyecto
Para poder correr el siguiente proyecto tenemos que tener instalado el manejador de dependecias composer el cual dejare el link para seguir los pasos para instalarlo:
1. https://getcomposer.org/download/

Una vez lo tengamos instalado vamos a la carpeta donde tenemos el proyecto preferible que sea dentro de C:\xampp\htdocs\ ya que el servidor es apache el que se utilizo en el desarrollo, dentro del proyecto desde powershell o cualquier otra consola de comandos ejecutamos:
1. composer install
2. php artisan key:generate

Cuando terminemos los pasos anteriores debemos crear la base de datos, el motor de base de datos que utilice fue phpMyAdmin, creamos la base de datos con el nombre tableroSudoku, al tener ya creada la base de datos nos vamos al archivo con el nombre de .env.example y lo renombramos como .env, en el cual tendremos que cambiar los siguientes campos:

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=tableroSudoku
- DB_USERNAME=root
- DB_PASSWORD=

Teniendo ya configurado el .env ya podemos correr el siguiente comando para ejecutar las migraciones:

1. php artisan migrate

Las rutas de las apis generadas en este proyecto se encuentran en la carpeta routes/api.php.
