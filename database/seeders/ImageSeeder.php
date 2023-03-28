<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'path' => 'images/services/27sKDVYBU0MkcFiZ8QU7guHDpHYKUTeLwXli6s5J.jpg'
        ]);

        Image::create([
            'path' => 'images/about/eReLn3g3cnSt9RZip9d5dnAWNdyBFp2V5y3d22ka.jpg'
        ]);

        Image::create([
            'path' => 'images/contact/jCyx6umX6JPQBIsB2WjjvEX5muR0OZm8EuJXqjf7.jpg'
        ]);

        Image::create([
            'path' => 'images/slider/lK30D4nlT9wZ1UShPiHUgoQY8gShVPJWD9Nrq9ET.jpg'
        ]);

        Image::create([
            'path' => 'images/slider/PwOdXEalelhNfJ6bPx1qEzwJpgLhHkJyGnczvBg9.jpg'
        ]);

        Image::create([
            'path' => 'images/slider/xMyRtuzctE7eEUjvPBpQvaRUt3TL9r3tpKp5plVU.jpg'
        ]);

    }
}
