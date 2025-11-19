1.Creacion tabla - migración
    En consola: php artisan make:migration create_incidencias_table
    Añadir propiedades --> codigo
    En consola: php artisan migrate

2. Creación modelo
    En consola: php artisan make:model Incidencia -fs
3. Añadir datos a la tabla - /database/factories/IncidenciaFactory.php
    En /database/seeders/IncidenciaSeeder -> Incidencia::factory(100)->create();
    En consola: php artisan db:seed --class=IncidenciaSeeder(crea bbdd)

4. Crear controlador
    En consola: php artisan make:controller IncidenciaController