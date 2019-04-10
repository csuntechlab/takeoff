<?php
namespace App\Services;

use App\ModelRepositoryInterfaces\UserInfoModelRepositoryInterface;
use App\Models\UserInfo;
use App\Contracts\UserInfoContract;
use Validator;


class UserInfoService implements UserInfoContract
{
    protected $userInfoModelRepo;

    public function __construct(UserInfoModelRepositoryInterface $userInfoModelRepo){
        $this->userInfoModelRepo = $userInfoModelRepo;
    }

    public function getStudentsByGradDate($graddate)
    {
        return $this->userInfoModelRepo->getStudentsByGradDate($graddate);
    }

    public function getStudentsByCollege($collegename)
    {
        return $this->userInfoModelRepo->getStudentsByCollege($collegename);
    }

    public function getStudentsByMajor($majorname)
    {
        return $this->userInfoModelRepo->getStudentsByMajor($majorname);
    }

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

        $student = new UserInfo;

        $student->user_id = "1";
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
