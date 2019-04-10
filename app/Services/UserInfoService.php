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

    public function store($data)
    {
        return UserInfo::create([
            'user_id' =>  "1",
            'major' => $data->major,
            'units' => $data->units,
            'grad_date' => $data->grad_date,
            'college' => $data->college,
            'bio' => $data->bio,
            'research' => $data->research,
            'fun_facts' => $data->fun_facts,
            'academic_interest' => $data->academic_interest
        ]);
    }
}
