<?php

namespace Database\Seeders;

use App\Models\publishers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'pub_id' => 'PUB001',
            'pub_name' => 'Gagasmedia',
            'address' => 'Jalan Sersan Jaini No 8 Surabaya, Indonesia',
            'phone' => '021-6492-4698',
            'email' => 'gagasmediajaya@gmail.com',
            'image' => 'gagasmedia.jpg'
        ]);
        DB::table('publishers')->insert([
            'pub_id' => 'PUB002',
            'pub_name' => 'Gramedia Pustaka Utama',
            'address' => 'Gedung Kompas Gramedia Blok M 7 Jakarta Pusat10270 Indonesia',
            'phone' => '021-9823-8490',
            'email' => 'redaksi@gramediapustakautama.com',
            'image' => 'gramediapustakautama.png'
        ]);
        DB::table('publishers')->insert([
            'pub_id' => 'PUB003',
            'pub_name' => 'Elex Media Komputindo',
            'address' => 'Gedung Kompas-Gramedia, Jl. Palmerah Barat No. 29 - 32, Gelora, Tanah Abang',
            'phone' => '021-5365-0110',
            'email' => 'elexmedia@gramedia.com',
            'image' => 'elexmedia.png'
        ]);
        DB::table('publishers')->insert([
            'pub_id' => 'PUB004',
            'pub_name' => 'Bhuana Ilmu Populer',
            'address' => 'Gedung serba guna Bhuana, Jalan Haji Ukti Binti Maimun No 1 Jakarta Selatan, Indonesia',
            'phone' => '021-6789-1234',
            'email' => 'Bhuanapopuler@gmail.com',
            'image' => 'bip.png'
        ]);
    }
}
