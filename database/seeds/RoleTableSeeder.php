<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'Be-Nomad User: Usuário que pode fazer booking de destinos';
        $role_user->save();

        $role_partner = new Role();
        $role_partner->name = 'Partner';
        $role_partner->description = 'Be-Nomad User: Usuário que pode criar listings de destinos';
        $role_partner->save();
        
        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'Be-Nomad User: Super User';
        $role_admin->save();

    }
}
