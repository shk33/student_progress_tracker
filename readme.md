# Sistema de progreso educativo basado en un entorno virtual colaborativo inteligente (Descriptor tabla registro ) alias &tapacoso

## Instalación en los servidores del servicio social
Los servidores no tienen instalado la extensión Phpmycrypt, para instarla  usar el comando:
``` 
  sudo apt-get install php5-mcrypt
```

Luego hay que crear manualmente una base de datos en mysql
``` 
  mysql -u root -p
```
Y luego:
``` 
  mysql> CREATE DATABASE 'ss'; (Ojo el mysql> no se escirbe jajaja)
```

Con eso ya se creó la base de datos, entonces ahora hay que exportar el archivo ss.sql(Lo acabo de actualizar en el repositorio ya tiene la clase de Dalila)
``` 
  mysql> use ss;
  mysql> source path/to/ss.sql;
```
Listo ya con eso se exportó la base de datos.

Ahora actualice el repositorio para que tengas las imágenes de la clase de Dalila,
está se encuentra en 'public/images/questions', copien esa carpeta en su código y ya.

Ahora obvio configurar Laravel en Apache2 es un dolor de cabeza, así que usaremos un php artisan serve, esto lo puedes ejecutar en la raíz de la carpeta del código. (ya no es necesario mover el código a etc/www y pelerase con permisos etc.)

``` 
  php artisan serve --host=0.0.0.0
```
Entonces para acceder al sistema desde el mismo server visita:
``` 
  localhost:8000
```
Para acceder desde los clientes:
``` 
  ip_del_server:8000
```

## Instalación

Asegurarse de tener instalado Composer.

Clonar el repositorio
```
git clone https://github.com/shk33/student_progress_tracker.git
```
Moverse al directorio del repositorio
```
cd student_progress_tracker
```
Instalar las dependencias con Composer
```
composer install
```

* Crear una base de datos vacia con cualquier nombre. (Yo le puse 'ss')
* En la raíz se encuentra el archivo ```.example.env.local.php``` hacer una copia de él y renombrarlo como ```.env.local.php```
* Modificar ese el archivo ```.env.local.php``` según la configuración de su PC
```php
  <?php

  return array(
      'DB_NAME'     => 'ss',
      'DB_USER'     => 'root',
      'DB_PASSWORD' => 'password',

  );
```

Correr las migraciones
```
php artisan migrate
```

Seedear la base de datos con usuarios de ejemplo
```
php artisan db:seed
```

Levantar el servidor (Normalmente puedes tirar el código en un XAMP o WAMP) pero para desarrollar prefiero un simple
```
php artisan serve
```

##Login en el sistema
Usuario de prueba maestro
```
username: tutor
password: password
```

Usuario de prueba estudiante (No implementado su panel aún)
```
username: student
password: password
```

##Clases
Para el módulo de los tests con la escalera he creado las siguientes clases:
* StudentTest: El test que crea el maestro. Esta clase tiene un atributo llamado 'type' por defecto su valor es 'normal'. Este atributo existe para diferenciar los Tests de la escalera con los Tests con presentación. Para el módulo de las escalera usar el valor por defecto, es decir, 'Normal'.
* Question:  Las pregunta que va a tener los tests. Existe la relación: StudentTest has many Question.
* Option: Las opciones de cada pregunta. Existe la relación: Question has many Options. Además la clase Option cuenta con el atributo 'is_correct' con el valor por defecto false. Usar este atributo para determinar cuál es la opción correcta.
* TakenTest: Un modelo pivote para relacion los StudentTest con los Users. Cuando el alumno tome un examen se debe crear este Modelo. Existen las siguientes relaciones: TakenTest belongs to User y TakenTest belongs to StudentTest.
* Answer: Las respuesta que los alumnos dan en su examen. Existe las siguientes relaciones: Answer belongs to TakenTest y Answer belongs to Option. Además Answer tiene el atributo is_correct para saber si el alumno eligio la opción correcta. 

## Tema Utilizado
Este es el tema que se usa [Nifty Theme](http://www.themeon.net/nifty/v2.3/index.html)

## Contribuir
Sólo no trabajen directamente sobre master, hagan sus propias ramas