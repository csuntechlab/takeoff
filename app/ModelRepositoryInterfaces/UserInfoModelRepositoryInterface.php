<?php

 namespace App\ModelRepositoryInterfaces;

 interface UserInfoModelRepositoryInterface
 {
    public function getAllStudents();
    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);
    public function searchUser($usersname);
 }
