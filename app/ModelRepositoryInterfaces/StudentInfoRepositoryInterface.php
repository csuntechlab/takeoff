<?php

//declare(strict_types=1);

 namespace App\ModelRepositoryInterfaces;

 interface StudentInfoRepositoryInterface
 {
//     public function store($request);
    public function getStudentsByMajor($majorname); //TO DO This method should take into account current students

 }