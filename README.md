# Using phinx migration with eloquent

J'ai pris le contenu de:

https://siipo.la/blog/how-to-use-eloquent-orm-migrations-outside-laravel

On doit créer à la main le dossier migrations.

L'utilisation du fichier de config phinx.yml à la racine du projet nous permet de nous epargner d'appeller
la phinx avec le paramètre -c pour passer le fichier de config.

## Utilisation de phinx

### Attention: Il y a des migrations qui ne s'ajoutent pas .
*On doit les ajouter à la main dans la table phinxlog*

À la racine du projet:

$ php vendor/bin/phinx list

Pour obtenir la liste de commandes.

### Créer une nouvelle migration

$ php vendor/bin/phinx create NomDeLaMigration #Important que ce soit camelcase!

Pour que ça se branche bien avec Eloquent, on utilise les méthodes up() et down() 
et non la méthode change.

Pour utiliser le nouvel stub:

$ php vendor/bin/phinx migrate -e dev

$ php vendor/bin/phinx create --template src/Migrations/stubs/update.stub UpdateTestNew

