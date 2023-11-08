<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Prodi::create(
                [
                "nama"=> "Teknik Informatika",
                ]
            );
        Prodi::create(
                [
                    "nama"=> "Manejement Informatika",
                ]
                );
        Prodi::create(
            [
                "nama"=> "Sistem Informasi",
            ]
        );
    }
}
