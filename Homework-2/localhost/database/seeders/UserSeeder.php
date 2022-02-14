<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $casualUser = Role::where('slug', 'casual_user')->first();

        $user1 = new User();
        $user1->name = 'user';
        $user1->email = 'user@user.ru';
        $user1->password = bcrypt('testtest');
        $user1->save();
        $user1->roles()->attach($admin);;

        $user2 = new User();
        $user2->name = 'user';
        $user2->email = 'user@user.ru';
        $user2->password = bcrypt('testtest');
        $user2->save();
        $user2->roles()->attach($casualUser);
    }
}
