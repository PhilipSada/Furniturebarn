<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('product_categories')->insert([
                'title'=>'sofas',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            DB::table('product_categories')->insert([
                'title'=>'sectionals',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            DB::table('product_categories')->insert([
                'title'=>'beds',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            DB::table('product_categories')->insert([
                'title'=>'dressers',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            DB::table('product_categories')->insert([
                'title'=>'coffee-table',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            DB::table('product_categories')->insert([
                'title'=>'dining-chair',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            DB::table('product_categories')->insert([
                'title'=>'dining-table',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
            DB::table('product_categories')->insert([
                'title'=>'ottomans',
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
            ]);
          
           
        }
    }
}
