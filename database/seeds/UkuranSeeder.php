<?php

use Illuminate\Database\Seeder;
use App\Ukuran;
class UkuranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Ukuran::create([
        	'ukuran'=>'XS',
    	]);
    	Ukuran::create([
        	'ukuran'=>'S',
    	]);
    	Ukuran::create([
        	'ukuran'=>'M',
    	]);
    	Ukuran::create([
        	'ukuran'=>'L',
    	]);
    	Ukuran::create([
        	'ukuran'=>'XL',
    	]);
    	Ukuran::create([
        	'ukuran'=>'XXL',
    	]);
    	Ukuran::create([
        	'ukuran'=>'ALL SIZE',
    	]);
    }
}
