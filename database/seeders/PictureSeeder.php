<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Picture::insert(
            [
                ['title' => "test1", "path" =>"https://static-asset-delivery.hasbroapps.com/5d7b4adf060f3d11eb9e4b5f9308b71d76daa602/980e046ac62ef3da6af04508900fed3d.png"]
            ]
        );
    }
}
