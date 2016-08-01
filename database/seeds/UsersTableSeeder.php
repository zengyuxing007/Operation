<?php

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('abc123'),
        ]);
        DB::table('roles')->insert(array(
            [
                'id'   => 0,
                'name'    => 'administrators',
                'display_name'    => '系统管理员',
            ]
        ));

        DB::table('role_user')->insert(
            array(
                'role_id' => 0,
                'user_id' => 1
            )
        );
    }
}
