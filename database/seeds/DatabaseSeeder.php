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
    	for ($i=3; $i < 100; $i++) { 
    		# code...
	        DB::table('tabel_mitra')->insert([
	            'nama' => 'admin'.$i,
	            'email' => 'admin'.$i.'@gmail.com',
	            'kontak' => $i,
	            'alamat' => 'alamatku',
	            'created_at'=>date('Y-m-d h:i:s'),
	            'updated_at'=>date('Y-m-d h:i:s'),
	            'remember_token' => bcrypt('admin'),
	        ]);
    	}
    }
}
