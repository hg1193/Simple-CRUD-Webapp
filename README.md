# Simple-CRUD-Webapp

A basic web form which collects User details such as name, email and date of birth. The application is build using Symfony 4 and Doctrine ORM.

# Set up

1. Install dependencies

```
composer install
```

2. Edit the env file and add DB params

3. Create User schema

```
php bin/console doctrine:migrations:diff
```

4. Run migrations

```
php bin/console doctrine:migrations:migrate
```

5. Build for production

```
npm run build
```

6. Run symfony server 

```
symfony server:start
```
