<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->slug = 'admin';
        $admin->save();

        $casualUser = new Role();
        $casualUser->name = 'casual_user';
        $casualUser->slug = 'casual_user';
        $casualUser->save();
    }
}
