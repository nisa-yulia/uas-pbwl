<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class Menu1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
    {
 
$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\id_ID\Restaurant($faker));

 
    	for($i = 1; $i <= 9; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('tb_menu')->insert([
    			'nama_menu' => $faker->foodName(),
    			'harga_menu' => $book->setPrice($faker->randomNumber(2))
    			   ]);
 
    	}
 
    }
}