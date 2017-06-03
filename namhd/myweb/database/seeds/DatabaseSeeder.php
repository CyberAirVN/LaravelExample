<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
      
    }
}
class DatabaseSeeder extends Seeder {
	public function run () {
		DB::table('users')->insert([
			['username'=>'hoducnam','password'=>'hoducnam','email'=>'hoducnam@gmail.com',]
			
		]);
	}
}