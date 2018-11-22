<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat Role admin

        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

        //membuat Role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //membuat sample admin
        $admin = new User();
        $admin->name = "AS LEATHER";
        $admin->email = "asleatherofficial@gmail.com";
        $admin->password = bcrypt('asleather');
        $admin->save();
        $admin->attachRole($adminRole);
        
        //membuat sample member
        $member = new User();
        $member->name = "Sample Member";
        $member->email = "member@gmail.com";
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
