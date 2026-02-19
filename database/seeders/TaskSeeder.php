<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task; // 🔥 EZ VOLT A HIÁNYZÓ DARAB

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        // Factorys adatok
        Task::factory()->count(3)->create();

        // Fix adatok
        Task::create([
            'title' => 'Helyszín foglalás',
            'description' => null,
            'status' => 'fuggoben',
        ]);

        Task::create([
            'title' => 'Egyeztetés',
            'description' => 'Igazgatóval megbeszélés',
            'status' => 'folyamatban',
        ]);
    }
}
