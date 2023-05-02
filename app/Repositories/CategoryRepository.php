<?php


namespace App\Repositories ;

use App\Models\Category;


class CategoryRepository   {

public $category ;

public function __construct(Category $category)
{
    $this->category = $category ;
}


public function all() {
    return $this->category->orderBy('name')->get();
}

public function countCategory() {
    return $this->category->count();
}




}
