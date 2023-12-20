<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        factory(App\User::class, 50)->create();
        /* or you can add also another table that is dependent on user_id:*/
       /*factory(App\User::class, 50)->create()->each(function($u) {
            $userId = $u->id;
            DB::table('posts')->insert([
                'body' => str_random(100),
                'user_id' => $userId,
            ]);
        });*/
    }
}
