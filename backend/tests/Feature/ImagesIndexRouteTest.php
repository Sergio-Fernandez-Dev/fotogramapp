<?php

namespace Tests\Feature;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImagesIndexRouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_200_status_is_received()
    {

        $this->withExceptionHandling();

        Image::factory(15)->create();
        $response = $this->get(\route('images.index'));
        $response->assertStatus(200);
    }

    public function test_all_images_are_received()
    {

        $this->withExceptionHandling();

        Image::factory(15)->create();
        $response = $this->get(\route('images.index'));
        $response->assertJsonCount(15);
    }
}
