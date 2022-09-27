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

        $request = Image::factory()->create(['id' => 1]);
        $response = $this->get(\route('images.show', $request->id));
        $response->assertStatus(200);
    }

    public function test_image_is_recived_when_id_is_provided()
    {
        $this->withExceptionHandling();

        $request = Image::factory()->create(['id' => 1]);

        $response = $this->get(\route('images.show', $request->id));
        $response->assertJsonCount(1);
    }

    public function test_error_message_is_recived_when_non_existent_id_is_provided()
    {
        $this->withExceptionHandling();

        Image::factory()->create(['id' => 1]);
        $id = 2;
        $response = $this->get(\route('images.show', $id));
        $response->assertSeeText('Usuario no encontrado');
    }

}
