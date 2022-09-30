<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Image::factory()->create([
            'title' => 'La magia del agua.jpg',
            'image' => 'http://localhost:8000/storage/image/BFSdz5uubSEGpwfWH5mjF41VBNG2vsHL8TBm9VLX.jpg'
        ]);
        Image::factory()->create([
            'title' => '_DSC4958.jpg',
            'image' => 'http://localhost:8000/storage/image/QzhYhJfDc4uYa4qmW8qkN42SVecml6Q9NWrJuXmC.jpg'
        ]);
        Image::factory()->create([
            'title' => 'Gatete guapo',
            'image' => 'http://localhost:8000/storage/image/mnFKvKpNQqvPzw18bV9wVKelbvctKoDsBeQXVFAz.jpg'
        ]);
        Image::factory()->create([
            'title' => '_DSC4962.jpg',
            'image' => 'http://localhost:8000/storage/image/pAz25NQuXGAcRZVKe6TF0bRvqai7cT8GedvXbg8t.jpg'
        ]);
        Image::factory()->create([
            'title' => 'DSC_1155.jpg',
            'image' => 'http://localhost:8000/storage/image/EO9XBagpAQ76HAecvYG4EnAPDLr3blYBBxtrA4vj.jpg'
        ]);
        Image::factory()->create([
            'title' => 'Atardecer en la costa asturiana',
            'image' => 'http://localhost:8000/storage/image/CBNFI77I78nhEuobKgrD0lFJLexFpYSImevaZKQx.jpg'
        ]);
        Image::factory()->create([
            'title' => 'Banco otoñal',
            'image' => 'http://localhost:8000/storage/image/FZ715rnqMJ8Zk5qbaPC7LvV4mIrWf4Pi77NNNpcv.png'
        ]);
        Image::factory()->create([
            'title' => '_DSC2790-como-objeto-inteligente-1.png',
            'image' => 'http://localhost:8000/storage/image/cDvqoVp8zmxTdc3BPUw77esPqVv3CSC4RbDVOUWD.png'
        ]);
        Image::factory()->create([
            'title' => '_DSC8646.jpg',
            'image' => 'http://localhost:8000/storage/image/Gx7WvS6W38hK6RzTKePbaCLufxokxpIWAopBfdkD.jpg'
        ]);
        Image::factory()->create([
            'title' => '_DSC0160.jpg',
            'image' => 'http://localhost:8000/storage/image/mXBzQW1QolqP0MleGfuhUu0Njs8YPyhSZO1u1X8y.jpg'
        ]);
        Image::factory()->create([
            'title' => 'Toledo',
            'image' => 'http://localhost:8000/storage/image/Uy5z4YYgavf9Y39SZ62hlVlIJYHOIdbKyp6nXFPs.jpg'
        ]);
    }
}
