<?php
namespace App\Contracts;

interface MediaAPIContract
{
    public function getMediaByEmail($email);
}