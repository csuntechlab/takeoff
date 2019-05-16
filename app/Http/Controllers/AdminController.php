<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Validator;
use Mail;
use App\Contracts\AdminContract;
use Illuminate\Http\Request;
use App\Mail\InviteStudent;
use App\Contracts\UserInfoContract;

class AdminController extends BaseController
{
    private $adminRetriever;
    private $userinfoRetriever;

    public function __construct(
        UserInfoContract $userinfoContract,
        AdminContract $adminContract)
    {
        $this->userinfoRetriever = $userinfoContract;
        $this->adminRetriever = $adminContract;
    }

    public function sendInvite($studentemail)
    {
        Mail::to($studentemail)->send(new InviteStudent($studentemail));

        return "email has been sent";
    }

    public function searchUser(Request $request)
    {
        $usersname = ['name' => $request->name];
        return $this->userinfoRetriever->searchUser($usersname);
    }

    public function getAllStudents()
    {
        return $this->userinfoRetriever->getAllStudents();
    }

    public function getStudentsByGradDate($graddate)
    {
        return $this->userinfoRetriever->getStudentsByGradDate($graddate);
    }

    public function getStudentsByCollege($collegename)
    {
        return $this->userinfoRetriever->getStudentsByCollege($collegename);
    }

    public function getStudentsByMajor($majorname)
    {
        return $this->userinfoRetriever->getStudentsByMajor($majorname);
    }

    public function sortUserFirstNameAscending()
    {
        return $this->userinfoRetriever->sortUserFirstNameAscending();
    }

    public function sortUserFirstNameDescending()
    {
        return $this->userinfoRetriever->sortUserFirstNameDescending();
    }

    public function sortUserLastNameAscending()
    {
        return $this->userinfoRetriever->sortUserLastNameAscending();
    }

    public function sortUserLastNameDescending()
    {
        return $this->userinfoRetriever->sortUserLastNameDescending();
    }

    public function createAdminUserInfo(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'title' => 'required',
        ]);

        if ($validatedData->fails()) {
            return $validatedData->errors()->all();
        }

        $data = $request;

        $admininfo = $this->adminRetriever->createAdminUserInfo($data);

        if ($admininfo) {
            return response()->json([$admininfo], 201);
        } else {
            return response()->json([
                'errors' => [
                    'invalid' => 'Unable to create Admin.'
                ]
            ], 406);
        }
    }

    public function deleteStudent($userId)
    {
        return $this->adminRetriever->deleteStudent($userId);
    }
}
