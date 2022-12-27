## How to Setup a Laravel Project You Cloned from Github.com

1. Clone GitHub repo for this project locally
```markdown

git clone https://github.com/risdatamamal/compro-alchemist.git compro-alchemist

```

2. After Clone Github repo, cd into your project. And then Install Composer Dependencies and NPM Dependencies
```markdown
composer install

composer update

npm install && npm run dev
```

3. Create a copy of your .env file
```markdown

cp .env.example .env

```

4. Generate an app encryption key
```markdown

php artisan key:generate

```

5. Create an empty database SQL for our application in MYSQL or PostgresSQL or anything about SQL

6. In the .env file, add database information to allow Laravel to connect to the database
```css
In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created. This will allow us to run migrations and seed the database in the next step.
```
7. Migrate the database
```markdown

php artisan migrate

```

8. Seed the database
```markdown

php artisan db:seed

```
