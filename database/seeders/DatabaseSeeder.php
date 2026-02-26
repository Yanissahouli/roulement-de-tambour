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
        ]);


        DB::table('cineaste')->insert([
            ['preCineaste' => 'Christopher', 'nomCineaste' => 'Nolan', 'datNaiCineaste' => '1970-07-30', 'natCineaste' => 'Britannique', 'bioCineaste' => 'Réalisateur britannique reconnu mondialement.'],
            ['preCineaste' => 'Scarlett', 'nomCineaste' => 'Johansson', 'datNaiCineaste' => '1984-11-22', 'natCineaste' => 'Américaine', 'bioCineaste' => 'Actrice américaine très populaire.'],
            ['preCineaste' => 'Leonardo', 'nomCineaste' => 'DiCaprio', 'datNaiCineaste' => '1974-11-11', 'natCineaste' => 'Américain', 'bioCineaste' => 'Acteur américain oscarisé.'],
        ]);

        DB::table('film')->insert([
            ['titFilm' => 'Inception', 'desFilm' => 'Un voleur entre dans les rêves.', 'annsorFilm' => '2010-07-16', 'lanFilm' => 'VF', 'durFilm' => '02:28:00', 'imgFilm' => 'inception.jpg'],
            ['titFilm' => 'Interstellar', 'desFilm' => 'Des astronautes voyagent dans le temps.', 'annsorFilm' => '2014-11-05', 'lanFilm' => 'VF', 'durFilm' => '02:49:00', 'imgFilm' => 'interstellar.jpg'],
            ['titFilm' => 'Avengers', 'desFilm' => 'Des super-héros sauvent le monde.', 'annsorFilm' => '2012-04-25', 'lanFilm' => 'VF', 'durFilm' => '02:23:00', 'imgFilm' => 'avengers.jpg'],
        ]);

        DB::table('salle')->insert([
            ['idSal' => 'SAL001', 'nomSalle' => 'Salle 1', 'capSal' => 100, 'idCin' => 1],
            ['idSal' => 'SAL002', 'nomSalle' => 'Salle 2', 'capSal' => 150, 'idCin' => 1],
            ['idSal' => 'SAL003', 'nomSalle' => 'Salle 1', 'capSal' => 200, 'idCin' => 2],
        ]);

        DB::table('utilisateur')->insert([
            ['nomUti' => 'Dupont', 'preUti' => 'Jean', 'mailUtil' => 'jean.dupont@gmail.com', 'mdpUti' => 'password123', 'rolUti' => 'user'],
            ['nomUti' => 'Martin', 'preUti' => 'Marie', 'mailUtil' => 'marie.martin@gmail.com', 'mdpUti' => 'password123', 'rolUti' => 'admin'],
        ]);

        DB::table('seance')->insert([
            ['nomSeance' => 'Séance 1', 'tarifSeance' => 9.50, 'dateSeance' => '2026-03-01 14:00:00', 'idSal' => 'SAL001'],
            ['nomSeance' => 'Séance 2', 'tarifSeance' => 11.00, 'dateSeance' => '2026-03-01 17:00:00', 'idSal' => 'SAL002'],
            ['nomSeance' => 'Séance 3', 'tarifSeance' => 9.50, 'dateSeance' => '2026-03-02 20:00:00', 'idSal' => 'SAL003'],
        ]);

        DB::table('diffuser')->insert([
            ['idCin' => 1, 'idFilm' => 1],
            ['idCin' => 1, 'idFilm' => 2],
            ['idCin' => 2, 'idFilm' => 3],
        ]);

        DB::table('avoir')->insert([
            ['idFilm' => 1, 'idGen' => 4],
            ['idFilm' => 2, 'idGen' => 4],
            ['idFilm' => 3, 'idGen' => 1],
        ]);

        DB::table('jouer')->insert([
            ['idFilm' => 1, 'idCineaste' => 2, 'typRole' => 'Actrice principale'],
            ['idFilm' => 3, 'idCineaste' => 2, 'typRole' => 'Actrice principale'],
            ['idFilm' => 1, 'idCineaste' => 3, 'typRole' => 'Acteur principal'],
        ]);

        DB::table('composer')->insert([
            ['idFilm' => 1, 'idCineaste' => 1],
            ['idFilm' => 2, 'idCineaste' => 1],
        ]);

        DB::table('correspond')->insert([
            ['idSeance' => 1, 'idFilm' => 1],
            ['idSeance' => 2, 'idFilm' => 2],
            ['idSeance' => 3, 'idFilm' => 3],
        ]);

        DB::table('reserver')->insert([
            ['idUti' => 1, 'idSeance' => 1, 'nbPers' => '2'],
            ['idUti' => 2, 'idSeance' => 2, 'nbPers' => '3'],
        ]);
    }
}
