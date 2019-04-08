<?php

 namespace App\ModelRepositoryInterfaces;

 interface StudentInfoRepositoryInterface
 {
    public function getStudentsByGradDate($graddate);
 }