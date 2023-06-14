#Created by this https://dev.to/kingsconsult/how-to-create-a-secure-crud-restful-api-in-laravel-8-and-7-using-laravel-passport-31fh

1. composer install
2. create database and config .env
3. php artisan migrate
4. php artisan passport:install
5. php artisan key:generate
6. php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
7. php artisan db:seed 
8. php artisan admin:install
9. php artisan storage:link

create new entity  
1. php artisan make:model CompanyEmployee -m
2. php artisan migrate
3. php artisan make:resource CompanyEmployeeResource
4. php artisan make:controller API/CompanyEmployeeController --api --model=CompanyEmployee

  php artisan passport:keys

  cd public

  rm storage -r
  
  php artisan storage:link

  add table to seeders
  php artisan iseed system_resource_permissions


