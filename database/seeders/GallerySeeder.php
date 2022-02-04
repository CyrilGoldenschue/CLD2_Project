<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Picture;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Gallery::insert([
            ["name" => "1"]
        ]);
        $faker = Factory::create();
        for ($i = 0; $i < random_int(0, 6); $i++) {
            $comment = [
                'gallery_id' => Gallery::all()->random()->id,
                'picture_id' => Picture::all()->random()->id,
            ];
            DB::table('gallery_picture')->insert($comment);
        }
    }
}
