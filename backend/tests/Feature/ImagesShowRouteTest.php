<?php

namespace Tests\Feature;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImagesShowRouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_200_status_is_received()
    {
        $this->withExceptionHandling();

        $image = Image::factory()->create(['id' => 1]);
        $id = 1;
        $response = $this->get(\route('images.show'), [$id]);
        $response->assertStatus(200);
    }
}
