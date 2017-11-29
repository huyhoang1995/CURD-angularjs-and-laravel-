<?php

use Illuminate\Database\Seeder;
use App\Lop;
class LopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('lops')->truncate();

    	$faker = Faker\Factory::create();

    	for ($i=0;$i<10;$i++){
    		App\Lop::create([
    			'ma_lop'=>$faker->text($maxNbChars = 6),
    			'ten_lop'=>$faker->text($maxNbChars = 25)
    			]);
    	}
    }
}
