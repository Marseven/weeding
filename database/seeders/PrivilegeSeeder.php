<?php

namespace Database\Seeders;

use App\Models\Privilege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //VOIR privilege

        Privilege::create([
            'name' => 'VOIR_UTILISATEUR',
            'description' => "Voir un utilisateur",
            'user_type_id' => 1,
        ]);

        Privilege::create([
            'name' => 'VOIR_PERMISSION',
            'description' => "Voir une privilège",
            'user_type_id' => 1,
        ]);

        Privilege::create([
            'name' => 'VOIR_ROLE',
            'description' => "Voir un rôle",
            'user_type_id' => 1,
        ]);

        Privilege::create([
            'name' => 'VOIR_UTILISATEUR_TYPE',
            'description' => "Voir un utilisateur type",
            'user_type_id' => 1,
        ]);

        Privilege::create([
            'name' => 'VOIR_ATTENDEE',
            'description' => "Voir une entreprise",
            'user_type_id' => 1,
        ]);


        Privilege::create([
            'name' => 'PRINT_ATTENDEE',
            'description' => "Valider une importation",
            'user_type_id' => 1,
        ]);
    }
}
