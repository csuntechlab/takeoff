<?php
namespace App\Services;

use App\Models\StudentInfo;
use App\Contracts\StudentInfoContract;
use Validator;

class StudentInfoService implements StudentInfoContract {

    public function store($request)
    {
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

        $student->user_id = "1"; //this needs to be auth()->user()
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