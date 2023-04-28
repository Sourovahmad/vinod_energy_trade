<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        DB::table('users')->insert([

            [
                'first_name' => 'sourov',
                'last_name' => 'vinod',
                'email' => 'sourov@gmail.com',
                'phone' => '11223344',
                'user_type' => 'buyer',
                'password' => bcrypt(11223344)
            ],

            [
                'first_name' => 'sourov',
                'last_name' => 'vinod',
                'email' => 'sourov2@gmail.com',
                'phone' => '11223344',
                'user_type' => 'seller',
                'password' => bcrypt(11223344)

            ]
      
        ]);

    }
}
