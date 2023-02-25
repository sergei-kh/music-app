<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Album;
use App\Models\Executor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $album = Album::factory()
            ->hasSongs(8);

        Executor::factory()
            ->count(50)
            ->has($album->count(10))
            ->create();
    }
}
