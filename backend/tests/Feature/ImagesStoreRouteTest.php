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

        $request = [
            'title' => 'test title',
            'url' => 'http://example.com',
        ];
        $response = $this->post(\route('images.store'),  $request);
        $response->assertStatus(200);
    }

    public function test_new_image_is_stored()
    {
        $this->withExceptionHandling();

        $request = [
            'title' => 'test title',
            'url' => 'http://example.com',
        ];
        $response = $this->post(\route('images.store'), $request);
        $this->assertCount(1, Image::all());
    }

    public function test_image_is_not_stored_when_a_wrong_format_parameter_is_given() {
        $this->withExceptionHandling();

        $request = [
            'title' => 15,
            'url' => 'http://example.com',
        ];

        $response = $this->post(\route('images.store'), $request);
        $this->assertCount(0, Image::all());
    }

    public function test_image_is_not_stored_when_a_required_param_is_missed() {
        $this->withExceptionHandling();

        $request = [
            'url' => 'http://example.com',
        ];

        $response = $this->post(\route('images.store'), $request);
        $this->assertCount(0, Image::all());
    }
}
