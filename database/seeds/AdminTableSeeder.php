<?php

use Illuminate\Database\Seeder;

use App\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Truncate previous entries
        User::query()->truncate();

        factory(User::class)->create([
            'email' => 'admin@example.com',
        ]);
    }
}
