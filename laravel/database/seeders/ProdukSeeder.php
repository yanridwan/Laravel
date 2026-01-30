<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            [
                'nama' => 'Produk 1',
                'jenis' => 'Elektronik',
                'deskripsi' => 'Deskripsi untuk produk 1',
                'harga_jual' => 1000000.00,
                'harga_beli' => 800000.00,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Produk 2',
                'jenis' => 'Pakaian',
                'deskripsi' => 'Deskripsi untuk produk 2',
                'harga_jual' => 200000.00,
                'harga_beli' => 150000.00,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Produk 3',
                'jenis' => 'Peralatan Rumah Tangga',
                'deskripsi' => 'Deskripsi untuk produk 3',
                'harga_jual' => 300000.00,
                'harga_beli' => 250000.00,
                'foto' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}