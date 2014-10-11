<?php
/**
 * Created by PhpStorm.
 * User: honganh
 * Date: 12/10/2014
 * Time: 01:51
 */
class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Administrator',
            'username' => 'admin',
            'email'    => 'admin@quanlygame.dev',
            'password' => Hash::make('abc1234'),
        ));
    }

}
