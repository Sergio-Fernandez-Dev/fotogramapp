<?php

namespace Tests\Feature;

use App\Models\Image;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\Rules\In;
use Tests\TestCase;

class ImageDestroyRouteTest extends TestCase
{
    use RefreshDatabase;

    public function test_200_status_is_received()
    {

        $this->withExceptionHandling();

        $request = Image::factory()->create();
        $response = $this->get(\route('images.destroy', $request->id));
        $response->assertStatus(200);
    }

    public function test_image_is_deleted()
    {

        $this->withExceptionHandling();

        $request = Image::factory()->create();
        $response = $this->delete(\route('images.destroy', $request->id));
        $this->assertCount(0, Image::all());
    }

    public function test_error_message_is_recived_when_non_existent_id_is_provided()
    {
        $this->withExceptionHandling();

        Image::factory()->create(['id' => 1]);
        $id = 2;
        $response = $this->get(\route('images.destroy', $id));
        $response->assertSeeText('Usuario no encontrado');
    }
}
