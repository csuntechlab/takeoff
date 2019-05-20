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

    public function searchUser($usersname)
    {
        $user = $this->userInfoModelRepo->searchUser($usersname);
        if ($user == null) {
            return ['message_error' => 'User could not be found.'];
        }
        return $user;
    }

    public function getUserById($userId)
    {
        return $this->userInfoModelRepo->getUserById($userId);
    }

    public function getAllStudents()
    {
        return $this->userInfoModelRepo->getAllStudents();
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

    public function sortUserFirstNameAscending()
    {
        return $this->userInfoModelRepo->sortUsersbyFirstName(1);
    }

    public function sortUserFirstNameDescending()
    {
        return $this->userInfoModelRepo->sortUsersbyFirstName(2);
    }

    public function sortUserLastNameAscending()
    {
        return $this->userInfoModelRepo->sortUsersbyLastName(1);
    }

    public function sortUserLastNameDescending()
    {
        return $this->userInfoModelRepo->sortUsersbyLastName(2);
    }

    public function createStudentUserInfo($data)
    {
        return UserInfo::create([
            'user_id' =>  $data->userId,
            'title' =>  "student",
            './'=> $data->firstName,
            'last_name'=> $data->lastName,
            'major' => $data->major,
            'grad_date' => $data->expectedGrad,
            'college' => $data->college,
            'bio' => $data->biography,
            'research' => $data->research,
            'fun_facts' => $data->funFacts,
            'academic_interest' => json_encode($data->academicInterests),
            'archive' => false
        ]);
    }
}
