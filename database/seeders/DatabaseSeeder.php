<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create([
            'name' => 'Elsayed Morad',
            'email' => 'contact@elsscuba.co.uk',
            'password' =>Hash::make('elsMscuba@123'),
        ]);

        // $this->call([
        //     HomeSeeder::class,
        // ]);
    


    }
}