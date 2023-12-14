<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Bouqet Flower Type A',
            'gambar' => 'typea1.jpg',
            'harga' => '150000',
            'stok' => '100',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bouqet Flower Type A',
            'gambar' => 'typea2.jpg',
            'harga' => '150000',
            'stok' => '100',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bouqet Flower Type B',
            'gambar' => 'typeb1.jpg',
            'harga' => '160000',
            'stok' => '50',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bouqet Flower Type C',
            'gambar' => 'typec1.jpg',
            'harga' => '170000',
            'stok' => '80',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bouqet Flower Type C',
            'gambar' => 'typec2.jpg',
            'harga' => '170000',
            'stok' => '30',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bouqet Flower Type D',
            'gambar' => 'typed1.jpg',
            'harga' => '180000',
            'stok' => '35',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);
        
        Produk::create([
            'nama_produk' => 'Bouqet Flower Type D',
            'gambar' => 'typed2.jpg',
            'harga' => '180000',
            'stok' => '35',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bouqet Flower Type E',
            'gambar' => 'typee1.jpg',
            'harga' => '200000',
            'stok' => '35',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
        ]);

        Produk::create([
            'nama_produk' => 'Bouqet Flower Type E',
            'gambar' => 'typee2.jpg',
            'harga' => '200000',
            'stok' => '35',
            'keterangan' => 'Available Color : Pink, Mintgreen, Khaki, Beige, Milk',
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),

        ]);
    }
}


            

           

           

           




            
    