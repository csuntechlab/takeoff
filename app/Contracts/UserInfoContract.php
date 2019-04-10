<?php
namespace App\Contracts;

interface UserInfoContract{

    public function store($validatedData);
    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);

}
