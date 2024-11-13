<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::firstOrCreate(
            ['email' => 'test2@hogehoge.com'],
            [
                'name' => 'Testだよ',
                'password' => password('password')
            ]
        );

        $this->call([
            SchedulesTableSeeder::class,
        ]);
    }
}
