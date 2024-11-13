<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Departement;
use App\Models\User;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Student::factory(100)->create();

        // Kelas 10 PPLG
        Grade::factory()->create(['name' => '10 PPLG 1']);
        Grade::factory()->create(['name' => '10 PPLG 2']);

        // Kelas 10 Animasi
        Grade::factory()->create(['name' => '10 Animasi 1']);
        Grade::factory()->create(['name' => '10 Animasi 2']);
        Grade::factory()->create(['name' => '10 Animasi 3']);
        Grade::factory()->create(['name' => '10 Animasi 4']);
        Grade::factory()->create(['name' => '10 Animasi 5']);

        // Kelas 10 DKV
        Grade::factory()->create(['name' => '10 DKV 1']);
        Grade::factory()->create(['name' => '10 DKV 2']);
        Grade::factory()->create(['name' => '10 DKV 3']);
        Grade::factory()->create(['name' => '10 DKV 4']);
        Grade::factory()->create(['name' => '10 DKV 5']);

        // Kelas 11 PPLG
        Grade::factory()->create(['name' => '11 PPLG 1']);
        Grade::factory()->create(['name' => '11 PPLG 2']);

        // Kelas 11 Animasi
        Grade::factory()->create(['name' => '11 Animasi 1']);
        Grade::factory()->create(['name' => '11 Animasi 2']);
        Grade::factory()->create(['name' => '11 Animasi 3']);
        Grade::factory()->create(['name' => '11 Animasi 4']);
        Grade::factory()->create(['name' => '11 Animasi 5']);

        // Kelas 11 DKV
        Grade::factory()->create(['name' => '11 DKV 1']);
        Grade::factory()->create(['name' => '11 DKV 2']);
        Grade::factory()->create(['name' => '11 DKV 3']);
        Grade::factory()->create(['name' => '11 DKV 4']);

        // Kelas 12 PPLG
        Grade::factory()->create(['name' => '12 PPLG 1']);
        Grade::factory()->create(['name' => '12 PPLG 2']);

        // Kelas 12 Animasi
        Grade::factory()->create(['name' => '12 Animasi 1']);
        Grade::factory()->create(['name' => '12 Animasi 2']);
        Grade::factory()->create(['name' => '12 Animasi 3']);
        Grade::factory()->create(['name' => '12 Animasi 4']);
        Grade::factory()->create(['name' => '12 Animasi 5']);

        // Kelas 12 DKV
        Grade::factory()->create(['name' => '12 DKV 1']);
        Grade::factory()->create(['name' => '12 DKV 2']);
        Grade::factory()->create(['name' => '12 DKV 3']);
        Grade::factory()->create(['name' => '12 DKV 4']);
        Grade::factory()->create(['name' => '12 DKV 5']);

        // Departements
        Departement::factory()->create([
            'name' => 'Perkembangan Perangkat Lunak dan Gim',
            'desc' => 'Bidang yang berfokus pada pengembangan perangkat lunak dan pembuatan gim...'
        ]);

        Departement::factory()->create([
            'name' => 'Animasi 2D',
            'desc' => 'Teknik pembuatan animasi dalam dua dimensi...'
        ]);

        Departement::factory()->create([
            'name' => 'Animasi 3D',
            'desc' => 'Teknik pembuatan animasi dalam tiga dimensi...'
        ]);

        Departement::factory()->create([
            'name' => 'Desain Komunikasi Visual: Desain Grafika',
            'desc' => 'Berfokus pada penciptaan elemen-elemen visual yang menarik...'
        ]);

        Departement::factory()->create([
            'name' => 'Desain Komunikasi Visual: Teknik Grafika',
            'desc' => 'Lebih fokus pada aspek teknis dalam produksi grafis...'
        ]);

        // User
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
