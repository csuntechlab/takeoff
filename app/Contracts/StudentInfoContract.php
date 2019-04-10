<?php
namespace App\Contracts;

interface StudentInfoContract{

    public function store($validatedData);
    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);

}
