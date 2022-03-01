<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'POP','category_id'=>1] ,
            ['name' => 'Jazz','category_id'=>1] ,
            ['name' => 'Rock','category_id'=>1] ,
            ['name' => 'Rap','category_id'=>1] ,
            ['name' => 'Ghazal','category_id'=>1] 
        ]);
    }
}
