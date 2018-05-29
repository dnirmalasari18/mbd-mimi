<?php

use Illuminate\Database\Seeder;
use App\KategoriBarang;
class KategoriBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        KategoriBarang::create([
        	'nama_kategori'=>'Dress Muslim',
    	]);
    	KategoriBarang::create([
        	'nama_kategori'=>'Atasan Muslim',
    	]);
    	KategoriBarang::create([
        	'nama_kategori'=>'Hijab',
    	]);
    	KategoriBarang::create([
        	'nama_kategori'=>'Bawahan Muslim',
    	]);
    	KategoriBarang::create([
        	'nama_kategori'=>'Outwear Muslim',
    	]);
    	KategoriBarang::create([
        	'nama_kategori'=>'Perlengkapan Sholat',
    	]);
    }
}
