<?php

use Illuminate\Database\Seeder;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_user = Role::where('name', 'User')->first();
        $role_partner = Role::where('name', 'Partner')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        /* 
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
        */

        $user = new User();
        $user->id = 1000;
        $user->name = 'John';
        $user->email = 'john@mail.com';
        $user->password = bcrypt('1234');
        $user->save();
        $user->roles()->attach($role_user);

        $partner = new User();
        $partner->id = 1000;
        $partner->name = 'Vitor';
        $partner->email = 'vitor@mail.com';
        $partner->password = bcrypt('1234');
        $partner->save();
        $partner->roles()->attach($role_partner);


        $admin = new User();
        $admin->id = 1000;
        $admin->name = 'Eric';
        $admin->email = 'eric@mail.com';
        $admin->password = bcrypt('1234');
        $admin->save();
        $admin->roles()->attach($role_admin);


    }
}
