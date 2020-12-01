<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $user = new User();

        $user->name = 'test';
        $user->email = 'test@test.com';
        $user->password = 'qwe1234';

        $user->save();
    }
}
