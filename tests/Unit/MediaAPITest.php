<?php

namespace Tests\Unit;

use App\Contracts\MediaAPIContract;
use App\Http\Controllers\MediaController;
use Tests\TestCase;
use Mockery;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MediaAPITest extends TestCase
{
    public $retriever;

    public function setUp()
    {
        parent::setUp();
        $this->retriever = Mockery::spy(MediaAPIContract::class);
    }

    public function able_to_connect_to_mediaAPI(){
        // Given a person's email we are able to get their image from the Media API
        // When
        // Then

        $controller = new MediaController($this->retriever);
        $this->retriever
            ->shouldReceive('getMediaByEmail')
            ->once();
        $controller->getMediaByEmail('steven.fitzgerald');

//        $response = $this->get('/media/steven.fitzgerald');
//
//        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}
