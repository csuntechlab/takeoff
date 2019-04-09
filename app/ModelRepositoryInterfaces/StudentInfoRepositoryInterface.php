<?php

 namespace App\ModelRepositoryInterfaces;

 interface StudentInfoRepositoryInterface
 {

    public function getStudentsByMajor($majorname);

 }