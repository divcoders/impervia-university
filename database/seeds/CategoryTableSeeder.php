<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     
  		$handle = fopen("database/seeds/out.csv", "r");

      while (($data = fgetcsv($handle, 200, ",")) !== FALSE) {
        
        DB::table('categories')->insert([
          'id' => $data[0],
          'name' => $data[2],
          'description' => $data[2],
          'slug' => str_slug($data[2]),
          'parent_id' => $data[1]
        ]);
      }
      
      fclose($handle);
    }
}
