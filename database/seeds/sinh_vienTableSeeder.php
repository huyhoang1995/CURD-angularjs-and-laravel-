<?php

use Illuminate\Database\Seeder;
use App\sinh_vien;

class sinh_vienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	  DB::table('sinh_viens')->truncate();

        $faker = Faker\Factory::create();

    	for ($i=0;$i<10;$i++){
    		App\sinh_vien::create([
    			'ma_sv'=>$faker->text($maxNbChars = 6),
    			'ten_sv'=>$faker->text($maxNbChars = 25),
    			'nien_khoa'=>$faker->text($maxNbChars = 10),
    			'dia_chi'=>$faker->text($maxNbChars = 6),
    			'email'=> $faker->email
    		]);
    	}

    }
}
