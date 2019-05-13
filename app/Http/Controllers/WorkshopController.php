<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contracts\WorkshopContract;
use Carbon\Carbon;

class WorkshopController extends Controller
{
    private $workshopRetriever;

    public function __construct(WorkshopContract $workshopContract)
    {
        $this->workshopRetriever = $workshopContract;
    }

    public function createWorkshop(Request $request)
    {
        $date = Carbon::parse($request->date);

        $data = [
            'instructor' => $request->instructor,
            'about_instructor' => $request->about_instructor,
            'assignment_info' => $request->assignment_info,
            'workshop_name' => $request->workshop_name,
            'workshop_description' => $request->workshop_description,
            'date' => $date
        ];

        return $this->workshopRetriever->createWorkshop($data);
    }

    public function getAllWorkshops()
    {
        return $this->workshopRetriever->getAllWorkshops();
    }

    public function getWorkshop($workshopId)
    {
        return $this->workshopRetriever->getWorkshop($workshopId);
    }

    public function getAttendance($workshopId)
    {
        return $this->workshopRetriever->getAttendance($workshopId);
    }
}
