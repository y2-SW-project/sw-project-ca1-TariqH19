<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
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
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin ->name = 'Tariq Horan';
        $admin ->email = 'tariqhoran@blazar.ie';
        $admin ->password = Hash::make('password');
        $admin ->save();
        $admin ->roles()->attach($role_admin);

        $admin = new User();
        $admin ->name = 'Jon Jones';
        $admin ->email = 'jonjones@blazar.ie';
        $admin ->password = Hash::make('password');
        $admin ->save();
        $admin ->roles()->attach($role_user);
    }
}

