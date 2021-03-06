# Test API - [César Gil Lao](https://github.com/cesargillao)

This API provides CRUD operation of Brands and Smartphones as well as a recursive and optimal list of related data.

## Installation

1. Clone the repository.
2. Install the dependencies:

```cmd
   $ composer install
```

3. Create the database **test_api**

4. Run the migrations:

```cmd
   $ php artisan migrate --seed
```

5. Run unit tests (TDD):

```cmd
   $ ./vendor/bin/phpunit --filter BrandsTest
   $ ./vendor/bin/phpunit --filter SmartphonesTest
   $ ./vendor/bin/phpunit --filter DataTest
```

6. With step 5 the data was modified. Run the migrations again:

```cmd
   $ php artisan migrate:fresh --seed
```

7. Initialize the server:

```cmd
   $ php artisan serve --host localhost
```

## Interface

In the Postman tool you can import the route collection with the file **_ TestAPI.postman_collection.json _** located in the root of the project.

## Routes available for this API

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
