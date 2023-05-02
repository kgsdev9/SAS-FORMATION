<?php


namespace App\Services ;

use App\Repositories\CourseRepository;


class CourseService  {


    protected $courseRepository ;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository  = $courseRepository ;
    }

    public function all() {
        return $this->courseRepository->all();
    }
    public function countCourse() {
        return $this->courseRepository->countCourse();
    }


    public function   courseLimited() {
        return $this->courseRepository->courseLimited();
    }


}
