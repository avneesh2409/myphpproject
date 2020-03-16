<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    public function all_students(){
           
        return DB::select('select * from student');
    }
    // public function save_student(){
    //    $sql = "insert into `students` (`name`, `age`, `school`, `class`, `contact`, `updated_at`, `created_at`) values (Avneesh dwivedi, 22, Maharishi Vidya Mandir, 12th, 9174855851, 2020-03-16 03:06:44, 2020-03-16 03:06:44))";
    //    DB::insert(`name`, `age`, `school`, `class`, `contact`, `updated_at`, `created_at`) values (Avneesh dwivedi, 22, Maharishi Vidya Mandir, 12th, 9174855851, 2020-03-16 03:06:44, 2020-03-16 03:06:44)) ;
    // }
}
