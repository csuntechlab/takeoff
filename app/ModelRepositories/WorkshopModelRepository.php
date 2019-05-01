<?php
declare(strict_types=1);

namespace App\ModelRepositories;
use App\ModelRepositoryInterfaces\WorkshopModelRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Workshop;

class WorkshopModelRepository implements WorkshopModelRepositoryInterface
{
    public function createWorkshop($data) {
        return DB::transaction(function() use ($data)
        {
            return Workshop::create([
                'workshop_name' => $data['workshop_name'],
                'workshop_description' => $data['workshop_description'],
                'instructor' => $data['instructor'],
                'about_instructor' => $data['about_instructor'],
                'assignment_info' => $data['assignment_info'],
                'date' => $data['date'],
            ]);
        });
    }
}
