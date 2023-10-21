# Dev installation guide

- Download devutils directory from project
- Create directory structure like this:

    - .docker
    - docker-compose.yml
    - site

- Clone project into site directory
- Launch `docker-compose up -d` command to start docker
- Launch `docker-compose exec php bash` to interact with php container
- Inside container launch `composer i` to install project dependencies
- Install node version using nvm preinstalled on container launching `nvm i`. NVM will install v18 according to .nvmrc file on project root
- Copy .env.example into .env file
- Into Database\Seeders\DatabaseSeeder class you will find a first demo user, so run `php artisan db:seed` to insert it into database
- This project use `laravel/sanctum` so you must run `php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
` to use migration and configuration file
- Run migration using `php artisan migrate` command
- Last, but not least, build frontend assets launching `npm i && npm run build` command
