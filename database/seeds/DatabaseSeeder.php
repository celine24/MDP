<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //call uses table seeder class
        $this->call('CategoriesTableSeeder');
        //this message shown in your terminal after running db:seed command
        $this->command->info("Categories table seeded :)");
    }
}

class CategoriesTableSeeder extends Seeder {

    public function run()
    {
        //delete categories table records
        DB::table('categories')->delete();
        //insert some dummy records
        DB::table('categories')->insert(array(
            array('name'=>'Conseil'),
            array('name'=>'Promotion'),
            array('name'=>'Actualité')
        ));
    }

}
