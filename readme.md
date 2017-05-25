Install project:

Download or clone project.<br>
Install packages. Use follow command. <br> 
```
composer install
```
Rename .env.example to .env file <br>
In .env file Insert correct data for db access. <br>
```
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Migrate tables. Use follow command.
```
php artisan migrate
```
Fill tables by faker data. Use follow command (optional).
```
php artisan db:seed
```
If you don't wont use migration, use dump on ```public/dump``` folder of project
