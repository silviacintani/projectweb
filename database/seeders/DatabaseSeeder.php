<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Http\Controllers\ProdukController;
use App\Models\Level;
use App\Models\produk;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Level::create([
            'nama_level' => 'admin'
        ]);

        Level::create([
            'nama_level' => 'user'
        ]);

        User::create([
            'name' => 'silvia',
            'email' => 'silvia@gmail.com',
            'password' => bcrypt('12345'),
           ]);

      
        //   User::create([
        //     'name' => 'via',
        //     'email' => 'via@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);
        
        produk::create([
            'nama_produk' => 'ballpoint joyko',
            'kategori' => 'alat tulis',
            'jumlah' => '1',
            'harga' => '6000',
            'foto' => ''
        ]);


        // User::create([
        //     'nama_produk' => 'pensil gambar',
        //     'kategori' => 'alat tulis',
        //     'jumlah' => '3',
        //     'harga' => '30000',
        //     'foto' => ''
        // ]);
    }
}
