# Symfony bug 47791 reproducer

## First step: Installation of a minimal 5.3 project

`docker compose run composer install` 

`docker compose run php doctrine:schema:create`

Everything is ok, the database should be created in `var/data.db`
Delete it.

## Second step: Upgrade to 5.4

Update `symfony/*` dependencies in composer.json to "5.4.*" and run the following

`docker compose run composer upgrade` 

`docker compose run php doctrine:schema:create`

You should have the following error 
```
[critical] Error thrown while running command "doctrine:schema:create". Message: "Class "App\Foo\Entity\Foo" is not a valid entity or mapped super class."
```
