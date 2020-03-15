<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        // DB::table('users')->truncate();
        // User::unguard();
        // factory(User::class, 10)->create();
        // User::reguard();
        factory(User::class, 50)->create();
    }
}
