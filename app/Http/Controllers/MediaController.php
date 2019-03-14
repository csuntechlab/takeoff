<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Response;

class MediaController extends Controller
{
    public function __construct()
    {

        //return $user->retrieveAuthorizedEmail();  //return their email

    }

    public function getMediaByEmail($email)
    {
        $client = new Client();
        $studentemail = $email;
        //$email = $this->retrieveEmail();  //this is will be implemented when the user can be found
        $url = 'https://api.sandbox.csun.edu/metalab/media/1.1/faculty/media/nr_' . $studentemail;
        $response = $client->get($url);

        return $response;
    }
}
