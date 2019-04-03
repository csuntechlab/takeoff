<?php
namespace App\Services;

use App\ModelRepositoryInterfaces\StudentInfoRepositoryInterface;
use App\Models\StudentInfo;
use App\Contracts\StudentInfoContract;
use Validator;


class StudentInfoService implements StudentInfoContract
{
    protected $studentInfoModelRepo;

    public function __construct(StudentInfoRepositoryInterface $studentInfoModelRepo){
        $this->studentInfoModelRepo = $studentInfoModelRepo;
    }

    public function store($request)
    {
        // TO DO put this inside the controller
        $validatedData = Validator::make($request->all(), [
            'major'=>'required',
            'units'=> 'required|integer',
            'grad_date' => 'required',
            'college'=>'required',
            'bio'=> 'required',
            'research' => 'required',
            'fun_facts'=>'required',
            'academic_interest' => 'required'
        ]);

        if($validatedData->fails()){
            return $validatedData->errors()->all();
        }

        $student = new StudentInfo;

        $student->user_id = $request->user_id; //this needs to be auth()->user()
        $student->major = $request->major;
        $student->units = $request->units;
        $student->grad_date = $request->grad_date;
        $student->college = $request->college;
        $student->bio = $request->bio;
        $student->research = $request->research;
        $student->fun_facts = $request->fun_facts;
        $student->academic_interest = $request->academic_interest;

        $student->save();

        return "Info Saved";
    }
}