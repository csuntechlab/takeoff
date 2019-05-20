<?php
namespace App\Contracts;

interface UserInfoContract{

    public function createStudentUserInfo($validatedData);
    public function getUserById($userId);
    public function getAllStudents();
    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);
    public function sortUserFirstNameAscending();
    public function sortUserFirstNameDescending();
    public function sortUserLastNameAscending();
    public function sortUserLastNameDescending();

    public function searchUser($usersname);

}
