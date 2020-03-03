<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $user = new User;
        $user->name = 'Samuel Jackson';
        $user->email = 'samueljackson@jackson.com';
        $user->password = bcrypt('samuel1234');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());

        $admin = new User;
        $admin->name = 'Irvan Kadhafi';
        $admin->email = 'irvan.kadhafi.tif18@polban.ac.id';
        $admin->password = bcrypt('irvan456');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
