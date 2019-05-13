<?php
namespace App\Contracts;

interface WorkshopContract
{
    public function createWorkshop($workshopData);
    public function getAllWorkshops();
}
