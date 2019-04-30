<?php

declare(strict_types=1);
namespace App\ModelRepositoryInterfaces;

use App\Models\Workshop;

interface WorkshopServiceModelRepositoryInterface
{
    public function createWorkshop($data);
}
