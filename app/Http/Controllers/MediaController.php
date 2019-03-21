<?php

namespace App\Http\Controllers;

use App\Contracts\MediaAPIContract;
use GuzzleHttp\Client;
use Response;

class MediaController extends Controller
{
    private $MediaAPIRetriever;

    public function __construct(MediaAPIContract $mediaAPIContract)
    {
        $this->MediaAPIRetriever = $mediaAPIContract;
    }

    public function getMedia($email)
    {
        return $this->MediaAPIRetriever->getMediaByEmail($email);
    }
}
