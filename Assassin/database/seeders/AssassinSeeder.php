<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Assassin;
use App\Models\Weapon;

class AssassinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assassins = Assassin::factory(5)->create();

        // assign a random existing weapon to each assassin if weapons exist
        $weapons = Weapon::all();
        if ($weapons->isNotEmpty()) {
            foreach ($assassins as $assassin) {
                $assassin->weapon_id = $weapons->random()->id;
                $assassin->save();
            }
        }
    }
}
