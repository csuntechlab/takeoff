<?php

 namespace App\ModelRepositoryInterfaces;

 interface StudentInfoRepositoryInterface
 {
//     public function store($request);
    public function getStudentsByGradDate($graddate);

 }