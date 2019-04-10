<?php

 namespace App\ModelRepositoryInterfaces;

 interface StudentInfoRepositoryInterface
 {

    public function getStudentsByMajor($majorname);
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);
 }
