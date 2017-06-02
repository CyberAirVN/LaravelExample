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
        DB::table('users')->truncate();
        App\User::create([
        	'username' =>'loc',
            'password'=>bcrypt(12345678),
        	'email' => 'baolocitplus@gmail.com',
        	'level' => '1'
        ]);
    }
}
