<?php

namespace App\Repositories ;

use App\Models\Course;


class CourseRepository  {

    public  $course ;

    public function  __construct(Course $course)
    {
        $this->course= $course ;
    }

    public function all() {
     return  $this->course->orderByDesc('created_at')->get();
    }

    public function countCourse() {
        return $this->course->all();
    }


    public function   courseLimited() {
        return $this->course->take(10)->get();
    }




}
