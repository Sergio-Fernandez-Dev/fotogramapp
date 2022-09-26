<?php

namespace Tests\Feature;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImagesStoreRouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_200_status_is_received()
    {

        $this->withExceptionHandling();

        $request = Image::factory()->create();
        $response = $this->post(\route('images.store'),  [$request]);
        $response->assertStatus(200);
    }

    public function test_new_image_is_stored()
    {

        $this->withExceptionHandling();

        $request = Image::factory()->create();
        $response = $this->post(\route('images.store'), [$request]);
        $this->assertCount(1, Image::all());
    }

    public function test_response_is_equal_to_request() {
        $this->withExceptionHandling();

        $request = Image::factory()->create();
        $response = $this->post(\route('images.store'), [$request]);
        $this->assertEquals($request, $response);
    }
}
