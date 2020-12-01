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

        $user->name = 'Test User';
        $user->email = 'test@user.com';
        $user->password = bcrypt('qwe1234');
        $user->save();

        $user1 = new User();
        $user1->name = 'Admin User';
        $user1->email = 'admin@user.com';
        $user1->password = bcrypt('qwe1234');
        $user1->save();
    }
}
