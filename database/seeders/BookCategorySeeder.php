<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC001',
            'book_id' => 'BOK002',
            'cat_id' => 'CAT001'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC002',
            'book_id' => 'BOK008',
            'cat_id' => 'CAT001'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC003',
            'book_id' => 'BOK009',
            'cat_id' => 'CAT001'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC004',
            'book_id' => 'BOK013',
            'cat_id' => 'CAT001'
        ]);

        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC005',
            'book_id' => 'BOK001',
            'cat_id' => 'CAT002'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC006',
            'book_id' => 'BOK005',
            'cat_id' => 'CAT002'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC007',
            'book_id' => 'BOK012',
            'cat_id' => 'CAT002'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC008',
            'book_id' => 'BOK016',
            'cat_id' => 'CAT002'
        ]);

        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC009',
            'book_id' => 'BOK004',
            'cat_id' => 'CAT003'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC010',
            'book_id' => 'BOK006',
            'cat_id' => 'CAT003'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC011',
            'book_id' => 'BOK011',
            'cat_id' => 'CAT003'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC12',
            'book_id' => 'BOK015',
            'cat_id' => 'CAT003'
        ]);

        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC013',
            'book_id' => 'BOK003',
            'cat_id' => 'CAT004'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC014',
            'book_id' => 'BOK007',
            'cat_id' => 'CAT004'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC015',
            'book_id' => 'BOK010',
            'cat_id' => 'CAT004'
        ]);
        DB::table('book_category')->insert([
            'book_cat_id' => 'BOC016',
            'book_id' => 'BOK014',
            'cat_id' => 'CAT004'
        ]);
    }
}
