<?php
namespace App\Contracts;

interface UserInfoContract{

    public function store($request);
    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);

}
