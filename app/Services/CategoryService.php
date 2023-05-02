<?php


namespace App\Services ;

use App\Repositories\CategoryRepository;

class  CategoryService  {


    protected $categoryRepository ;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository  = $categoryRepository ;
    }

    public function all() {
        return $this->categoryRepository->all();
    }

    public function countCategory() {
        return $this->categoryRepository->countCategory();
    }

}
