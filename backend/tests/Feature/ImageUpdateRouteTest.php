<?php

namespace Tests\Feature;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ImageUpdateRouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_200_status_is_received()
    {
        $this->withExceptionHandling();

        $image = Image::factory()->create(['title' => 'original']);
        $request = [
            'title' => 'test title',
            'url' => 'http://example.com',
        ];
        $response = $this->put(\route('images.update', $image->id), $request);
        $response->assertStatus(200);
    }

    public function test_image_is_updated()
    {
        $this->withExceptionHandling();

        $image = Image::factory()->create(['title' => 'original']);
        $request = [
            'title' => 'test title',
            'url' => 'http://example.com',
        ];
        $response = $this->put(\route('images.update', $image->id), $request);
        $this->assertEquals($request['title'], Image::first()->title);
    }

    public function test_image_is_not_updated_when_a_wrong_format_parameter_is_given()
    {
        $this->withExceptionHandling();

        $image = Image::factory()->create(['title' => 'original']);

        $request = [
            'title' => 15,
            'url' => 'http://example.com',
        ];

        $response = $this->put(\route('images.update', $image->id), $request);
        $this->assertNotEquals($request['title'], Image::first());
    }

    public function test_image_is_updated_when_only_one_param_is_changed()
    {
        $this->withExceptionHandling();

        $image = Image::factory()->create(['title' => 'original']);
        $request = [
            'title' => 'test title',
        ];
        $response = $this->patch(\route('images.update', $image->id), $request);
        $this->assertEquals($request['title'], Image::first()->title);
    }
}
