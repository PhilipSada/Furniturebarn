<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title'=>'Alphie Sofa',
            'image_url'=>'/images/sofa/Alphie Sofa.png',
            'description'=>'Beautiful sofa with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Emelen Sofa',
            'image_url'=>'/images/sofa/Emelen Sofa.png',
            'description'=>'Beautiful sofa with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Densmore Sofa',
            'image_url'=>'/images/sofa/Densmore Sofa.png',
            'description'=>'Beautiful sofa with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Carmine Sofa',
            'image_url'=>'/images/sofa/Carmine Sofa.png',
            'description'=>'Beautiful sofa with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Carrington Sofa',
            'image_url'=>'/images/sofa/Carrington Sofa.png',
            'description'=>'Beautiful sofa with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Corliss Sofa',
            'image_url'=>'/images/sofa/Corliss Sofa.png',
            'description'=>'Beautiful sofa with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>1,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Anaheim 3-pc. Leather Sectional Sofa',
            'image_url'=>'/images/sectional/Anaheim 3-pc. Leather Sectional Sofa.png',
            'description'=>'Beautiful sectional with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Braelyn 3-pc. Microfiber Sectional Sofa',
            'image_url'=>'/images/sectional/Braelyn 3-pc. Microfiber Sectional Sofa.png',
            'description'=>'Beautiful sectional with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Daine 3-pc. Sectional Sofa',
            'image_url'=>'/images/sectional/Daine 3-pc. Sectional Sofa.png',
            'description'=>'Beautiful sectional with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Granger 3-pc. Sectional Sofa',
            'image_url'=>'/images/sectional/Granger 3-pc. Sectional Sofa.png',
            'description'=>'Beautiful sectional with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Leighton 3-pc. Sectional Sofa',
            'image_url'=>'/images/sectional/Leighton 3-pc. Sectional Sofa.png',
            'description'=>'Beautiful sectional with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Power Reclining Sectional Sofa',
            'image_url'=>'/images/sectional/Power Reclining Sectional Sofa.png',
            'description'=>'Beautiful sectional with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days.seat height is 17",seat depth is 31", arm height is 24", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>2,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Anaheim Leather Lift-Top Storage Ottoman',
            'image_url'=>'/images/ottoman/Anaheim Leather Lift-Top Storage Ottoman.png',
            'description'=>'Beautiful ottoman with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days. Height is 15",width is 15", length is 15", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>8,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Braelyn Cocktail Ottoman',
            'image_url'=>'/images/ottoman/Braelyn Cocktail Ottoman.png',
            'description'=>'Beautiful ottoman with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days. Height is 15",width is 15", length is 15", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>8,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Briarwood Microfiber Ottoman',
            'image_url'=>'/images/ottoman/Briarwood Microfiber Ottoman.png',
            'description'=>'Beautiful ottoman with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days. Height is 15",width is 15", length is 15", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>8,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Cindy Crawford  Microfiber Cocktail Ottoman',
            'image_url'=>'/images/ottoman/Cindy Crawford  Microfiber Cocktail Ottoman.png',
            'description'=>'Beautiful ottoman with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days. Height is 15",width is 15", length is 15", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>8,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Denley Leather Ottoman',
            'image_url'=>'/images/ottoman/Denley Leather Ottoman.png',
            'description'=>'Beautiful ottoman with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days. Height is 15",width is 15", length is 15", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>8,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Garrison Leather Storage Cocktail Ottoman',
            'image_url'=>'/images/ottoman/Garrison Leather Storage Cocktail Ottoman.png',
            'description'=>'Beautiful ottoman with a clean, contemporary look. the structure welcomes generously padded goosedown cushions which is bordered by thick relief stitching. the base is covered in leather or fabric, raised off the floor by metal feet. In-stock items ship within 10-14 business days. Height is 15",width is 15", length is 15", materials used are polyester, rayon, flax, fabric content includes 53% polyester, 35% rayon, 12% flax.avoid direct sunlight; avoid exposure to heat; avoid sharp objects, avoid strong cleaning products; vacuum regularly.seat construction includes high density foam, feather wrap, decor wrap. Assembly is required.',
            'category_id'=>8,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Alana Coffee Table',
            'image_url'=>'/images/coffee-table/Alana Coffee Table.png',
            'description'=>'Beautiful table with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Allure Glass Coffee Table',
            'image_url'=>'/images/coffee-table/Allure Glass Coffee Table.png',
            'description'=>'Beautiful table with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Beltran Coffee Table',
            'image_url'=>'/images/coffee-table/Beltran Coffee Table.png',
            'description'=>'Beautiful table with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Dunhill Glass Coffee Table',
            'image_url'=>'/images/coffee-table/Dunhill Glass Coffee Table.png',
            'description'=>'Beautiful table with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Gerald Coffee Table',
            'image_url'=>'/images/coffee-table/Gerald Coffee Table.png',
            'description'=>'Beautiful table with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Mercer Coffee Table',
            'image_url'=>'/images/coffee-table/Mercer Coffee Table.png',
            'description'=>'Beautiful table with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>5,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Blanchard King Bed',
            'image_url'=>'/images/beds/Blanchard King Bed.png',
            'description'=>'Beautiful bed with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This bed has a width of 68”, a length of 28.5" and a height of 37”.  Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Bowman King Bed',
            'image_url'=>'/images/beds/Bowman King Bed.png',
            'description'=>'Beautiful bed with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This bed has a width of 68”, a length of 28.5" and a height of 37”.  Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Lorient King Bed',
            'image_url'=>'/images/beds/Lorient King Bed.png',
            'description'=>'Beautiful bed with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This bed has a width of 68”, a length of 28.5" and a height of 37”.  Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Odette King Bed',
            'image_url'=>'/images/beds/Odette King Bed.png',
            'description'=>'Beautiful bed with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This bed has a width of 68”, a length of 28.5" and a height of 37”.  Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Quinn King Storage Bed',
            'image_url'=>'/images/beds/Quinn King Storage Bed.png',
            'description'=>'Beautiful bed with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This bed has a width of 68”, a length of 28.5" and a height of 37”.  Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Sheridan King Bed',
            'image_url'=>'/images/beds/Sheridan King Bed.png',
            'description'=>'Beautiful bed with a clean, contemporary look.  The base is covered in leather or fabric, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This bed has a width of 68”, a length of 28.5" and a height of 37”.  Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>3,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Cambridge Drawer Dresser',
            'image_url'=>'/images/dresser/Cambridge Drawer Dresser.png',
            'description'=>'Beautiful dresser with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dresser has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Hempstead Bedroom Dresser',
            'image_url'=>'/images/dresser/Hempstead Bedroom Dresser.png',
            'description'=>'Beautiful dresser with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dresser has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Hopkins Bedroom Dresser',
            'image_url'=>'/images/dresser/Hopkins Bedroom Dresser.png',
            'description'=>'Beautiful dresser with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dresser has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Place Dresser',
            'image_url'=>'/images/dresser/Place Dresser.png',
            'description'=>'Beautiful dresser with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dresser has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Tiffany Bedroom Dresser',
            'image_url'=>'/images/dresser/Tiffany Bedroom Dresser.png',
            'description'=>'Beautiful dresser with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dresser has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Vogue Bedroom Dresser',
            'image_url'=>'/images/dresser/Vogue Bedroom Dresser.png',
            'description'=>'Beautiful dresser with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dresser has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>4,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Fallon Dining Chair',
            'image_url'=>'/images/dining-chair/Fallon Dining Chair.png',
            'description'=>'Beautiful dining chair with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining chair has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Halloran Dining Chair',
            'image_url'=>'/images/dining-chair/Halloran Dining Chair.png',
            'description'=>'Beautiful dining chair with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining chair has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Lorient Dining Armchair',
            'image_url'=>'/images/dining-chair/Lorient Dining Armchair.png',
            'description'=>'Beautiful dining chair with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining chair has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Poplar Hills Upholstered Dining Chair',
            'image_url'=>'/images/dining-chair/Poplar Hills Upholstered Dining Chair.png',
            'description'=>'Beautiful dining chair with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining chair has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Tatum Dining Chair',
            'image_url'=>'/images/dining-chair/Tatum Dining Chair.png',
            'description'=>'Beautiful dining chair with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining chair has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Teagan Dining Chair',
            'image_url'=>'/images/dining-chair/Teagan Dining Chair.png',
            'description'=>'Beautiful dining chair with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining chair has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>6,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Landburn Dining Table',
            'image_url'=>'/images/dining-table/Landburn Dining Table.png',
            'description'=>'Beautiful dining table with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Logan Dining Table',
            'image_url'=>'/images/dining-table/Logan Dining Table.png',
            'description'=>'Beautiful dining table with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Nina Dining Table',
            'image_url'=>'/images/dining-table/Nina Dining Table.png',
            'description'=>'Beautiful dining table with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Saybrook Dining Table',
            'image_url'=>'/images/dining-table/Saybrook Dining Table.png',
            'description'=>'Beautiful dining table with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Shelby Dining Table',
            'image_url'=>'/images/dining-table/Shelby Dining Table.png',
            'description'=>'Beautiful dining table with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
        DB::table('products')->insert([
            'title'=>'Tiffany Dining Table',
            'image_url'=>'/images/dining-table/Tiffany Dining Table.png',
            'description'=>'Beautiful dining table with a clean, contemporary look.  The base is covered with high quality wood, raised off the floor by metal feet. This is perfect for stacks of your favorite books. Item ships in 10-14 business days. This dining table has a width of 59.5”, a depth of 29.5" and a height of 16”.Materials used include Lacquered Top, Reclaimed French Oak Solids, Steel Base, Plywood and Bleached Poplar Veener.',
            'category_id'=>7,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}
