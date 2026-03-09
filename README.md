CineForAll est une application web développée avec Laravel. Elle permet de gérer et consulter des informations liées au cinéma : films, cinéastes, utilisateurs et autres contenus associés. Le projet est conçu pour être simple à installer, maintenable et évolutif afin de faciliter l’arrivée de nouveaux contributeurs.

Prérequis techniques
Environnement système
- Windows, macOS ou Linux
- Git installé
PHP
- Version minimale : PHP 8.4
Extensions nécessaires : pdo_mysql, openssl, mbstring, tokenizer, xml, ctype, json, curl
Composer
- Composer 2.x installé globalement
Base de données
- MySQL 8 ou MariaDB 10.5 ou supérieur
- Un utilisateur disposant des droits de création, modification et suppression
Serveur local
- Utilisation possible de Laravel Sail ou du serveur interne via php artisan serve

Installation du projet
1. Cloner le dépôt
git clone https://github.com/Yanissahouli/roulement-de-tambour


2. Installer les dépendances
composer install


3. Créer le fichier d’environnement
cp .env.example .env


4. Configurer la base de données dans le fichier .env
Exemple :
DB_DATABASE=cineforall
DB_USERNAME=root
DB_PASSWORD=motdepasse


5. Générer la clé d’application
php artisan key:generate


6. Lancer les migrations et les éventuelles données de test
php artisan migrate --seed


7. Démarrer le serveur de développement
php artisan serve


Le site est accessible à l’adresse suivante :
http://127.0.0.1:8000 

Structure du projet
Dossier app
Contient la logique métier : modèles, contrôleurs, politiques, services.
Dossier resources/views
Contient les vues Blade, dont le layout principal et les pages liées aux différentes sections du site.
Dossier public
Contient les fichiers accessibles publiquement : feuilles de style, images, scripts.
Dossier routes
Contient les définitions des routes, principalement dans web.php.

Tests
Si des tests sont présents, ils peuvent être exécutés avec la commande suivante :
php artisan test



Contribution
Création d’une branche
git checkout -b feature/nom-de-la-fonctionnalite


Règles de contribution
- Respecter les conventions Laravel
- Écrire un code clair et commenté
- Ne pas laisser de code mort
- Ne pas inclure d’informations sensibles dans les commits