<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder {
	public function run() {
		DB::table('users')->delete();

		$users = array(
			array(
				'name' => 'Terry',
				'password' => Hash::make('terry'),
				'email' => 'example@example.com'
				)
			);

		DB::table('users')->insert($users);
	}
}