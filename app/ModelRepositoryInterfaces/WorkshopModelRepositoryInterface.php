<?php

declare(strict_types=1);
namespace App\ModelRepositoryInterfaces;

use App\Models\Workshop;

interface WorkshopModelRepositoryInterface
{
    public function createWorkshop($data);
}
