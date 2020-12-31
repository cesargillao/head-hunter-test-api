# Test API - [César Gil Lao](https://github.com/cesargillao)

Esta API proporciona el funcionamiento CRUD de marcas y teléfonos inteligentes, así como una lista recursiva y óptima de datos relacionados.

## Instalación

1. Clonar el repositorio.
2. Instalar las dependencias:

```cmd
   $ composer install
```

3. Crear la base de datos **test_api**

4. Ejecutar las migraciones:

```cmd
   $ php artisan migrate --seed
```

5. Ejecutar pruebas unitarias (TDD):

```cmd
   $ ./vendor/bin/phpunit --filter BrandsTest
   $ ./vendor/bin/phpunit --filter SmartphonesTest
   $ ./vendor/bin/phpunit --filter DataTest
```

6. Con el paso 5 se modificaron los datos. Ejecutar las migraciones nuevamente:

```cmd
   $ php artisan migrate:fresh --seed
```

7. Inicializar el servidor:

```cmd
   $ php artisan serve --host localhost
```

## Interfáz

En la herramienta Postman puedes importar la colección de rutas con el archivo **_TestAPI.postman_collection.json_** ubicado en la raíz del proyecto.

## Rutas disponibles para esta API

| Method    | URI                              | Name               | Action                                            | Middleware |
|-----------|----------------------------------|--------------------|---------------------------------------------------|------------|
| GET       | api/brand                        | brand.index        | App\Http\Controllers\BrandController@index        | api        |
| POST      | api/brand                        | brand.store        | App\Http\Controllers\BrandController@store        | api        |
| GET       | api/brand/create                 | brand.create       | App\Http\Controllers\BrandController@create       | api        |
| GET       | api/brand/{brand}                | brand.show         | App\Http\Controllers\BrandController@show         | api        |
| PUT       | api/brand/{brand}                | brand.update       | App\Http\Controllers\BrandController@update       | api        |
| DELETE    | api/brand/{brand}                | brand.destroy      | App\Http\Controllers\BrandController@destroy      | api        |
| GET       | api/brand/{brand}/edit           | brand.edit         | App\Http\Controllers\BrandController@edit         | api        |
| GET       | api/data/optimal                 |                    | Closure                                           | api        |
| GET       | api/data/recursive               |                    | Closure                                           | api        |
| GET       | api/smartphone                   | smartphone.index   | App\Http\Controllers\SmartphoneController@index   | api        |
| POST      | api/smartphone                   | smartphone.store   | App\Http\Controllers\SmartphoneController@store   | api        |
| GET       | api/smartphone/create            | smartphone.create  | App\Http\Controllers\SmartphoneController@create  | api        |
| GET       | api/smartphone/{smartphone}      | smartphone.show    | App\Http\Controllers\SmartphoneController@show    | api        |
| PUT       | api/smartphone/{smartphone}      | smartphone.update  | App\Http\Controllers\SmartphoneController@update  | api        |
| DELETE    | api/smartphone/{smartphone}      | smartphone.destroy | App\Http\Controllers\SmartphoneController@destroy | api        |
| GET       | api/smartphone/{smartphone}/edit | smartphone.edit    | App\Http\Controllers\SmartphoneController@edit    | api        |
