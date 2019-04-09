<?php

 namespace App\ModelRepositoryInterfaces;

 interface StudentInfoRepositoryInterface
 {
    public function getStudentsByGradDate($graddate);
    public function getStudentsByCollege($collegename);
 }
