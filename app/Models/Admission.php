<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
     protected $guarded=[];

     public static function getAdmission()
     {
          $records = DB::table('admissions')->select("id", "name", "phone", "email", "present_address", "course_name", "course_duration")->orderBy('course_duration', 'desc')->get()->toArray();
          return $records;
     }


     public static function getRAdmission()
     {
          $records = DB::table('admissions')->select("id", "name", "phone", "email", "present_address", "course_name", "course_duration")->where('status', "running")->orderBy('course_duration', 'desc')->get()->toArray();
       
          return $records;
     }


     public static function getPAdmission()
     {
          $records = DB::table('admissions')->select("id", "name", "phone", "email", "present_address", "course_name", "course_duration")->where('status', "Success")->orderBy('course_duration', 'desc')->get()->toArray();
       
          return $records;
     }

}
