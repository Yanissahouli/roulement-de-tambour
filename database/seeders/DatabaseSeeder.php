<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cinema')->insert([
            ['nomCin' => 'CGR Lyon', 'adrCin' => '1 rue de la Paix', 'vilCin' => 'Lyon', 'cpCin' => '69001'],
            ['nomCin' => 'UGC Grenoble', 'adrCin' => '5 avenue Victor Hugo', 'vilCin' => 'Grenoble', 'cpCin' => '38000'],
            ['nomCin' => 'Pathé Annecy', 'adrCin' => '12 rue du Lac', 'vilCin' => 'Annecy', 'cpCin' => '74000'],
            ['nomCin' => 'MK2 Paris', 'adrCin' => '14 boulevard du Temple', 'vilCin' => 'Paris', 'cpCin' => '75003'],
            ['nomCin' => 'Gaumont Bordeaux', 'adrCin' => '8 place de la Comédie', 'vilCin' => 'Bordeaux', 'cpCin' => '33000'],
            ['nomCin' => 'Pathé Marseille', 'adrCin' => '3 rue de la République', 'vilCin' => 'Marseille', 'cpCin' => '13001'],
            ['nomCin' => 'UGC Toulouse', 'adrCin' => '2 allée du Président Roosevelt', 'vilCin' => 'Toulouse', 'cpCin' => '31000'],
            ['nomCin' => 'CGR Nantes', 'adrCin' => '10 rue du Calvaire', 'vilCin' => 'Nantes', 'cpCin' => '44000'],
        ]);

        DB::table('genre')->insert([
            ['libGen' => 'Action'],
            ['libGen' => 'Comédie'],
            ['libGen' => 'Drame'],
            ['libGen' => 'Science-Fiction'],
            ['libGen' => 'Horreur'],
            ['libGen' => 'Thriller'],
            ['libGen' => 'Animation'],
            ['libGen' => 'Aventure'],
            ['libGen' => 'Romance'],
            ['libGen' => 'Fantastique'],
        ]);

        DB::table('cineaste')->insert([
            ['preCineaste' => 'Christopher', 'nomCineaste' => 'Nolan', 'datNaiCineaste' => '1970-07-30', 'natCineaste' => 'Britannique', 'bioCineaste' => 'Réalisateur britannique reconnu mondialement pour Inception et Interstellar.', 'imgCineaste' => 'nolan.jpg'],
            ['preCineaste' => 'Scarlett', 'nomCineaste' => 'Johansson', 'datNaiCineaste' => '1984-11-22', 'natCineaste' => 'Américaine', 'bioCineaste' => 'Actrice américaine très populaire, connue pour son rôle de Black Widow.', 'imgCineaste' => 'johansson.jpg'],
            ['preCineaste' => 'Leonardo', 'nomCineaste' => 'DiCaprio', 'datNaiCineaste' => '1974-11-11', 'natCineaste' => 'Américain', 'bioCineaste' => 'Acteur américain oscarisé pour The Revenant.', 'imgCineaste' => 'dicaprio.jpg'],
            ['preCineaste' => 'James', 'nomCineaste' => 'Cameron', 'datNaiCineaste' => '1954-08-16', 'natCineaste' => 'Canadien', 'bioCineaste' => 'Réalisateur canadien, auteur de Titanic et Avatar.', 'imgCineaste' => 'cameron.jpg'],
            ['preCineaste' => 'Natalie', 'nomCineaste' => 'Portman', 'datNaiCineaste' => '1981-06-09', 'natCineaste' => 'Américaine', 'bioCineaste' => 'Actrice oscarisée pour Black Swan.', 'imgCineaste' => 'portman.jpg'],
            ['preCineaste' => 'Tom', 'nomCineaste' => 'Hanks', 'datNaiCineaste' => '1956-07-09', 'natCineaste' => 'Américain', 'bioCineaste' => 'Acteur américain légendaire, double oscarisé.', 'imgCineaste' => 'hanks.jpg'],
            ['preCineaste' => 'Steven', 'nomCineaste' => 'Spielberg', 'datNaiCineaste' => '1946-12-18', 'natCineaste' => 'Américain', 'bioCineaste' => 'Réalisateur américain, auteur de Jurassic Park et Schindler\'s List.', 'imgCineaste' => 'spielberg.jpg'],
            ['preCineaste' => 'Meryl', 'nomCineaste' => 'Streep', 'datNaiCineaste' => '1949-06-22', 'natCineaste' => 'Américaine', 'bioCineaste' => 'Actrice américaine la plus primée de l\'histoire du cinéma.', 'imgCineaste' => 'streep.jpg'],
            ['preCineaste' => 'Ridley', 'nomCineaste' => 'Scott', 'datNaiCineaste' => '1937-11-30', 'natCineaste' => 'Britannique', 'bioCineaste' => 'Réalisateur britannique, auteur de Gladiator et Alien.', 'imgCineaste' => 'scott.jpg'],
            ['preCineaste' => 'Brad', 'nomCineaste' => 'Pitt', 'datNaiCineaste' => '1963-12-18', 'natCineaste' => 'Américain', 'bioCineaste' => 'Acteur américain oscarisé et producteur reconnu.', 'imgCineaste' => 'pitt.jpg'],
            ['preCineaste' => 'Cate', 'nomCineaste' => 'Blanchett', 'datNaiCineaste' => '1969-05-14', 'natCineaste' => 'Australienne', 'bioCineaste' => 'Actrice australienne, double oscarisée.', 'imgCineaste' => 'blanchett.jpg'],
            ['preCineaste' => 'Quentin', 'nomCineaste' => 'Tarantino', 'datNaiCineaste' => '1963-03-27', 'natCineaste' => 'Américain', 'bioCineaste' => 'Réalisateur américain, auteur de Pulp Fiction et Kill Bill.', 'imgCineaste' => 'tarantino.jpg'],
            ['preCineaste' => 'Morgan', 'nomCineaste' => 'Freeman', 'datNaiCineaste' => '1937-06-01', 'natCineaste' => 'Américain', 'bioCineaste' => 'Acteur américain oscarisé, voix emblématique du cinéma.', 'imgCineaste' => 'freeman.jpg'],
            ['preCineaste' => 'Jodie', 'nomCineaste' => 'Foster', 'datNaiCineaste' => '1962-11-19', 'natCineaste' => 'Américaine', 'bioCineaste' => 'Actrice et réalisatrice américaine, double oscarisée.', 'imgCineaste' => 'foster.jpg'],
        ]);

        DB::table('film')->insert([
            ['titFilm' => 'Inception', 'desFilm' => 'Un voleur entre dans les rêves pour dérober des secrets.', 'annsorFilm' => '2010-07-16', 'lanFilm' => 'VF', 'durFilm' => '02:28:00', 'imgFilm' => 'inception.jpg'],
            ['titFilm' => 'Interstellar', 'desFilm' => 'Des astronautes voyagent dans le temps et l\'espace pour sauver l\'humanité.', 'annsorFilm' => '2014-11-05', 'lanFilm' => 'VF', 'durFilm' => '02:49:00', 'imgFilm' => 'interstellar.jpg'],
            ['titFilm' => 'Avengers', 'desFilm' => 'Des super-héros s\'unissent pour sauver le monde.', 'annsorFilm' => '2012-04-25', 'lanFilm' => 'VF', 'durFilm' => '02:23:00', 'imgFilm' => 'avengers.jpg'],
            ['titFilm' => 'Titanic', 'desFilm' => 'Une histoire d\'amour tragique à bord du paquebot Titanic.', 'annsorFilm' => '1997-12-19', 'lanFilm' => 'VF', 'durFilm' => '03:14:00', 'imgFilm' => 'titanic.jpg'],
            ['titFilm' => 'Le Silence des Agneaux', 'desFilm' => 'Une agente du FBI traque un tueur en série avec l\'aide d\'Hannibal Lecter.', 'annsorFilm' => '1991-02-14', 'lanFilm' => 'VF', 'durFilm' => '01:58:00', 'imgFilm' => 'silence_agneaux.jpg'],
            ['titFilm' => 'Forrest Gump', 'desFilm' => 'La vie extraordinaire d\'un homme simple qui traverse l\'histoire américaine.', 'annsorFilm' => '1994-07-06', 'lanFilm' => 'VF', 'durFilm' => '02:22:00', 'imgFilm' => 'forrest_gump.jpg'],
            ['titFilm' => 'Gladiator', 'desFilm' => 'Un général romain trahi devient gladiateur pour se venger de l\'empereur.', 'annsorFilm' => '2000-05-05', 'lanFilm' => 'VF', 'durFilm' => '02:35:00', 'imgFilm' => 'gladiator.jpg'],
            ['titFilm' => 'Pulp Fiction', 'desFilm' => 'Plusieurs histoires de criminels de Los Angeles s\'entremêlent.', 'annsorFilm' => '1994-10-14', 'lanFilm' => 'VF', 'durFilm' => '02:34:00', 'imgFilm' => 'pulp_fiction.jpg'],
            ['titFilm' => 'Le Seigneur des Anneaux', 'desFilm' => 'Une communauté part détruire l\'anneau unique pour sauver la Terre du Milieu.', 'annsorFilm' => '2001-12-19', 'lanFilm' => 'VF', 'durFilm' => '02:58:00', 'imgFilm' => 'seigneur_anneaux.jpg'],
            ['titFilm' => 'Matrix', 'desFilm' => 'Un hacker découvre que le monde est une simulation informatique.', 'annsorFilm' => '1999-03-31', 'lanFilm' => 'VF', 'durFilm' => '02:16:00', 'imgFilm' => 'matrix.jpg'],
            ['titFilm' => 'Avatar', 'desFilm' => 'Un soldat paralysé explore une planète extraterrestre en prenant possession d\'un corps avatar.', 'annsorFilm' => '2009-12-18', 'lanFilm' => 'VF', 'durFilm' => '02:42:00', 'imgFilm' => 'avatar.jpg'],
            ['titFilm' => 'Jurassic Park', 'desFilm' => 'Des dinosaures sont recréés dans un parc qui devient incontrôlable.', 'annsorFilm' => '1993-06-11', 'lanFilm' => 'VF', 'durFilm' => '02:07:00', 'imgFilm' => 'jurassic_park.jpg'],
        ]);

        DB::table('salle')->insert([
            ['idSal' => 'SAL001', 'nomSalle' => 'Salle 1', 'capSal' => 100, 'idCin' => 1],
            ['idSal' => 'SAL002', 'nomSalle' => 'Salle 2', 'capSal' => 150, 'idCin' => 1],
            ['idSal' => 'SAL003', 'nomSalle' => 'Salle 3', 'capSal' => 80,  'idCin' => 1],
            ['idSal' => 'SAL004', 'nomSalle' => 'Salle 1', 'capSal' => 200, 'idCin' => 2],
            ['idSal' => 'SAL005', 'nomSalle' => 'Salle 2', 'capSal' => 120, 'idCin' => 2],
            ['idSal' => 'SAL006', 'nomSalle' => 'Salle 1', 'capSal' => 180, 'idCin' => 3],
            ['idSal' => 'SAL007', 'nomSalle' => 'Salle 2', 'capSal' => 90,  'idCin' => 3],
            ['idSal' => 'SAL008', 'nomSalle' => 'Salle 1', 'capSal' => 250, 'idCin' => 4],
            ['idSal' => 'SAL009', 'nomSalle' => 'Salle 2', 'capSal' => 130, 'idCin' => 4],
            ['idSal' => 'SAL010', 'nomSalle' => 'Salle 1', 'capSal' => 160, 'idCin' => 5],
            ['idSal' => 'SAL011', 'nomSalle' => 'Salle 1', 'capSal' => 140, 'idCin' => 6],
            ['idSal' => 'SAL012', 'nomSalle' => 'Salle 1', 'capSal' => 110, 'idCin' => 7],
            ['idSal' => 'SAL013', 'nomSalle' => 'Salle 1', 'capSal' => 170, 'idCin' => 8],
        ]);

        DB::table('users')->insert([
            ['name' => 'Jean Dupont', 'email' => 'jean.dupont@gmail.com', 'password' => bcrypt('password123'), 'role' => 'user'],
            ['name' => 'Marie Martin', 'email' => 'marie.martin@gmail.com', 'password' => bcrypt('password123'), 'role' => 'admin'],
            ['name' => 'Paul Bernard', 'email' => 'paul.bernard@gmail.com', 'password' => bcrypt('password123'), 'role' => 'user'],
            ['name' => 'Sophie Leroy', 'email' => 'sophie.leroy@gmail.com', 'password' => bcrypt('password123'), 'role' => 'user'],
            ['name' => 'Lucas Moreau', 'email' => 'lucas.moreau@gmail.com', 'password' => bcrypt('password123'), 'role' => 'user'],
        ]);

        DB::table('seance')->insert([
            ['nomSeance' => 'Séance 1',  'tarifSeance' => 15.00,  'dateSeance' => '2026-03-10 14:00:00', 'idSal' => 'SAL001'],
            ['nomSeance' => 'Séance 2',  'tarifSeance' => 15.00, 'dateSeance' => '2026-03-10 17:00:00', 'idSal' => 'SAL002'],
            ['nomSeance' => 'Séance 3',  'tarifSeance' => 15.00,  'dateSeance' => '2026-03-11 20:00:00', 'idSal' => 'SAL004'],
            ['nomSeance' => 'Séance 4',  'tarifSeance' => 15.00, 'dateSeance' => '2026-03-12 15:00:00', 'idSal' => 'SAL005'],
            ['nomSeance' => 'Séance 5',  'tarifSeance' => 15.00,  'dateSeance' => '2026-03-13 18:00:00', 'idSal' => 'SAL006'],
            ['nomSeance' => 'Séance 6',  'tarifSeance' => 15.00, 'dateSeance' => '2026-03-14 21:00:00', 'idSal' => 'SAL008'],
            ['nomSeance' => 'Séance 7',  'tarifSeance' => 15.00,  'dateSeance' => '2026-03-15 14:00:00', 'idSal' => 'SAL003'],
            ['nomSeance' => 'Séance 8',  'tarifSeance' => 15.00, 'dateSeance' => '2026-03-15 19:00:00', 'idSal' => 'SAL007'],
            ['nomSeance' => 'Séance 9',  'tarifSeance' => 15.00, 'dateSeance' => '2026-03-16 16:00:00', 'idSal' => 'SAL009'],
            ['nomSeance' => 'Séance 10', 'tarifSeance' => 15.00,  'dateSeance' => '2026-03-17 20:00:00', 'idSal' => 'SAL010'],
            ['nomSeance' => 'Séance 11', 'tarifSeance' => 15.00, 'dateSeance' => '2026-03-18 15:00:00', 'idSal' => 'SAL011'],
            ['nomSeance' => 'Séance 12', 'tarifSeance' => 15.00,  'dateSeance' => '2026-03-19 18:00:00', 'idSal' => 'SAL012'],
        ]);

        DB::table('diffuser')->insert([
            ['idCin' => 1, 'idFilm' => 1],
            ['idCin' => 1, 'idFilm' => 2],
            ['idCin' => 2, 'idFilm' => 3],
            ['idCin' => 2, 'idFilm' => 4],
            ['idCin' => 3, 'idFilm' => 5],
            ['idCin' => 4, 'idFilm' => 6],
            ['idCin' => 4, 'idFilm' => 7],
            ['idCin' => 5, 'idFilm' => 8],
            ['idCin' => 6, 'idFilm' => 9],
            ['idCin' => 7, 'idFilm' => 10],
            ['idCin' => 8, 'idFilm' => 11],
            ['idCin' => 1, 'idFilm' => 12],
        ]);

        DB::table('avoir')->insert([
            ['idFilm' => 1,  'idGen' => 4],
            ['idFilm' => 2,  'idGen' => 4],
            ['idFilm' => 3,  'idGen' => 1],
            ['idFilm' => 4,  'idGen' => 9],
            ['idFilm' => 5,  'idGen' => 6],
            ['idFilm' => 6,  'idGen' => 3],
            ['idFilm' => 7,  'idGen' => 1],
            ['idFilm' => 8,  'idGen' => 6],
            ['idFilm' => 9,  'idGen' => 10],
            ['idFilm' => 10, 'idGen' => 4],
            ['idFilm' => 11, 'idGen' => 4],
            ['idFilm' => 12, 'idGen' => 8],
        ]);

        DB::table('jouer')->insert([
            ['idFilm' => 1,  'idCineaste' => 3,  'typRole' => 'Acteur principal'],
            ['idFilm' => 2,  'idCineaste' => 3,  'typRole' => 'Acteur principal'],
            ['idFilm' => 3,  'idCineaste' => 2,  'typRole' => 'Actrice principale'],
            ['idFilm' => 4,  'idCineaste' => 3,  'typRole' => 'Acteur principal'],
            ['idFilm' => 5,  'idCineaste' => 14, 'typRole' => 'Actrice principale'],
            ['idFilm' => 6,  'idCineaste' => 6,  'typRole' => 'Acteur principal'],
            ['idFilm' => 7,  'idCineaste' => 10, 'typRole' => 'Acteur principal'],
            ['idFilm' => 8,  'idCineaste' => 10, 'typRole' => 'Acteur principal'],
            ['idFilm' => 9,  'idCineaste' => 11, 'typRole' => 'Actrice principale'],
            ['idFilm' => 10, 'idCineaste' => 13, 'typRole' => 'Acteur principal'],
            ['idFilm' => 11, 'idCineaste' => 3,  'typRole' => 'Acteur principal'],
            ['idFilm' => 12, 'idCineaste' => 6,  'typRole' => 'Acteur principal'],
        ]);

        DB::table('composer')->insert([
            ['idFilm' => 1,  'idCineaste' => 1],
            ['idFilm' => 2,  'idCineaste' => 1],
            ['idFilm' => 4,  'idCineaste' => 4],
            ['idFilm' => 6,  'idCineaste' => 7],
            ['idFilm' => 7,  'idCineaste' => 9],
            ['idFilm' => 8,  'idCineaste' => 12],
            ['idFilm' => 11, 'idCineaste' => 4],
            ['idFilm' => 12, 'idCineaste' => 7],
        ]);

        DB::table('correspond')->insert([
            ['idSeance' => 1,  'idFilm' => 1],
            ['idSeance' => 2,  'idFilm' => 2],
            ['idSeance' => 3,  'idFilm' => 3],
            ['idSeance' => 4,  'idFilm' => 4],
            ['idSeance' => 5,  'idFilm' => 5],
            ['idSeance' => 6,  'idFilm' => 6],
            ['idSeance' => 7,  'idFilm' => 7],
            ['idSeance' => 8,  'idFilm' => 8],
            ['idSeance' => 9,  'idFilm' => 9],
            ['idSeance' => 10, 'idFilm' => 10],
            ['idSeance' => 11, 'idFilm' => 11],
            ['idSeance' => 12, 'idFilm' => 12],
        ]);

       /* DB::table('reserver')->insert([
            ['idUti' => 1, 'idSeance' => 1,  'nbPers' => '2'],
            ['idUti' => 2, 'idSeance' => 2,  'nbPers' => '3'],
            ['idUti' => 3, 'idSeance' => 3,  'nbPers' => '1'],
            ['idUti' => 4, 'idSeance' => 5,  'nbPers' => '4'],
            ['idUti' => 5, 'idSeance' => 7,  'nbPers' => '2'],
            ['idUti' => 1, 'idSeance' => 9,  'nbPers' => '3'],
            ['idUti' => 2, 'idSeance' => 11, 'nbPers' => '2'],
        ]);*/
    }
}
