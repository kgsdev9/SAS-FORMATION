<?php

namespace App\Http\Controllers\Courses;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Services\LevelService;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    protected $categoryService ;
    protected $leveService ;


    public function __construct(CategoryService $categoryService , LevelService $levelService)

    {
        $this->categoryService = $categoryService ;
        $this->leveService = $levelService ;
    }

    /**
     * Display a listing of the resource.
     */


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiledashboard.courses.add', [
            'levelAll' => $this->leveService->all(),
            'categoryAll' => $this->categoryService->all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        dd($request->all());

     $path = $request->file('image')->store('public');
    $data =    Course::create([
            'title' => $request->input('title'),
            'prix' => $request->input('prix'),
            'category_id' => $request->input('category_id'),
            'level_id' => $request->input('level_id'),
            'url_video' => $request->input('url_video'),
            'description' => $request->input('description'),
            'formateur_id'=> Auth::user()->id,
            'image' => $path
        ]);

        dd($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
