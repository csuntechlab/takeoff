<?php
namespace App\Services;

use App\Contracts\MediaAPIContract;
use GuzzleHttp\Client;
use Response;

class MediaAPIService implements MediaAPIContract
{
    public function getMediaByEmail($email)
    {
        $client = new Client();
        //$email = $this->retrieveEmail();  //this is will be implemented when the user can be found

        $url = 'https://api.sandbox.csun.edu/metalab/media/1.1/faculty/media/nr_' . $email;
        $response = $client->get($url);

        return $response;
    }
}
