<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class ItemTableSeeder extends Seeder {

	public function run() {
		DB::table('item')->delete();

		$items = array(
			array(
				'owner_id' => 1,
				'name' => 'Pick up milk',
				'done' => false
				),

			array(
				'owner_id' => 1,
				'name' => 'Walk the dogs',
				'done' => true
				)
			);

		DB::table('item')->insert($items);
	}
}