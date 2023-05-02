<?php

namespace App\Repositories;
use App\Models\Formateur;



  class TeacherRepository  {


    public $teacher ;



    public function __construct(Formateur $teacher)
    {
        $this->teacher  = $teacher ;
    }


    public function teacherVerified() {
        return $this->teacher
        ->where('status','1')
        ->orderByDesc('created_at')
        ->get();
    }



    public function  show($id) {
        return $this->teacher->find($id);
    }


    public function teacherNotVerified() {
        return $this->teacher->where('status', '0')
        ->orderByDesc('created_at')
        ->get();
    }

    public function countTeacher() {
        return $this->teacher->count();
    }


    public function recentlyTeacher() {
        return $this->teacher->orderByDesc('created_at')->get();
    }

  }
