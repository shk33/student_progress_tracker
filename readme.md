# Sistema de progreso educativo basado en un entorno virtual colaborativo inteligente (Descriptor tabla registro ) alias &tapacoso

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
php artisan db:migrate
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
## Tema Utilizado
Este es el tema que se usa [Nifty Theme](http://www.themeon.net/nifty/v2.3/index.html)

## Contribuir
Sólo no trabajen directamente sobre master, hagan sus propias ramas