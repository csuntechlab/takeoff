<?php
namespace App\Contracts;

interface StudentInfoContract{

    public function store($request);
    public function getStudentsByMajor($majorname);

}