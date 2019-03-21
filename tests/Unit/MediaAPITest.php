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

    /**
     * @test
     */

    public function able_to_connect_to_mediaAPI(){

        $controller = new MediaController($this->retriever);

        $this->retriever
            ->shouldReceive('getMediaByEmail')
            ->once()
            ->with('steven.fitzgerald')
            ->andReturn(['a', 'b', 'c']);

        $response = $controller->getMedia('steven.fitzgerald');
        $this->assertEquals(['a', 'b', 'c'], $response);

    }
}
