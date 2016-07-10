<?php
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder {
	public function run()
	{
		DB::table('categories')->insert([
			'name' => 'Conseil'
		]);
		DB::table('categories')->insert([
        	'name' => 'Promotion'
        ]);
		DB::table('categories')->insert([
             'name' => 'Actualité'
        ]);


	}
}