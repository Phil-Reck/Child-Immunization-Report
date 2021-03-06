![image](https://user-images.githubusercontent.com/60153430/155512769-cb2103d2-0c50-47d4-bcf1-f9759690ec77.png)

### Requirements
1. Composer
2. MySQL

### Installation
#### 1. Clone the repository
```bash
git clone https://github.com/phil-reck/Child-Immunization-Report
```
#### 2. Install the dependencies
Ensure you have `composer` installed on your computer before proceeding.
Navigate to the root of the project. i.e If you are on linux terminal: `$cd child-immunization-Report`

The run:
```bash
composer install
```

#### 3. Setup environment variables
Create a database for the project in MySQL then configure the parameters `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in the `.env` file at the project root directory.

#### 4. Run database migration
Make sure configuration is not cached:
```bash
php artisan config:clear
```

Then run migration. This will run database scripts to create database tables:
```bash
php artisan migrate
#### 5. Seed the database
If the migration is successfull, seed the database.
I am user laravel facker composer packege to generate fake date.
If u skip this step your database instance will not have any data.
```bash
php artisan db:seed
```


#### 6. Run the application
Run
```bash
php artisan serve
```
